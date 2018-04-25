<?php
/**
*   Class to manage workflow.
*
*   @author     Lee Garner <lee@leegarner.com>
*   @copyright  Copyright (c) 2011 Lee Garner <lee@leegarner.com>
*   @package    paypal
*   @version    0.5.0
*   @license    http://opensource.org/licenses/gpl-2.0.php 
*               GNU Public License v2 or later
*   @filesource
*/

namespace Paypal;

/**
*   Class for workflow items
*   Workflows are defined in the database and can be re-ordered and 
*   individually enabled or disabled.  The workflows determine which screens
*   are displayed during checkout and in what order they appear.
*   @package paypal
*/
class Workflow
{
    static $table = 'paypal.workflows';

    /**
    *   Constructor.
    *   Initializes the array of workflows.
    *
    *   @uses   Load()
    */
    public function __construct()
    {
        self::Init();
    }


    /**
    *   Load the workflows into the global workflow array.
    */
    public static function Load()
    {
        global $_TABLES, $_PP_CONF;

        $_PP_CONF['workflows'] = array();
        $sql = "SELECT wf_name
                FROM {$_TABLES[self::$table]}
                WHERE enabled = 1
                ORDER BY orderby ASC";
        $res = DB_query($sql);
        while ($A = DB_fetchArray($res, false)) {
            $_PP_CONF['workflows'][] = $A['wf_name'];
        }
    }


    /**
    *   Initilize the workflow array, if not already done.
    *   Scope is Public since it's called from Cart's constructor
    *
    *   @uses   Load()
    */
    public static function Init()
    {
        global $_PP_CONF;

        if (!isset($_PP_CONF['workflows']) || 
            !is_array($_PP_CONF['workflows'])) {
            self::Load();
        }
    }


    /**
    *   Set a boolean field to the specified value.
    *
    *   @param  integer $id ID number of element to modify
    *   @param  integer $value New value to set
    *   @return         New value, or old value upon failure
    */
    protected function _toggle($oldvalue, $varname, $id)
    {
        global $_TABLES;

        // If it's still an invalid ID, return the old value
        if ($id < 1)
            return $oldvalue;

        // Determing the new value (opposite the old)
        $newvalue = $oldvalue == 1 ? 0 : 1;

        $sql = "UPDATE {$_TABLES[self::$table]}
                SET $varname=$newvalue
                WHERE id='$id'";
        //echo $sql;die;
        DB_query($sql);

        return $newvalue;
    }


    /**
    *   Sets the "enabled" field to the specified value.
    *
    *   @uses   _toggle()
    *   @param  integer $id         ID number of element to modify
    *   @param  string  $field      Database fieldname to change
    *   @param  integer $oldvalue   Original value to change
    *   @return         New value, or old value upon failure
    */
    public function Toggle($id, $field, $oldvalue)
    {
        global $_TABLES;

        $oldvalue = $oldvalue == 0 ? 0 : 1;
        $id = (int)$id;
        if ($id < 1)
            return $oldvalue;
        $field = DB_escapeString($field);

        // Determing the new value (opposite the old)
        $newvalue = $oldvalue == 1 ? 0 : 1;

        $sql = "UPDATE {$_TABLES[self::$table]}
                SET $field = $newvalue
                WHERE id='$id'";
        //echo $sql;die;
        DB_query($sql, 1);
        if (!DB_error()) {
            return $newvalue;
        } else {
            COM_errorLog("Workflow::Toggle() SQL error: $sql", 1);
            return $oldvalue;
        }
    }


    /**
    *   Reorder all workflow items.
    */
    public function ReOrder()
    {
        global $_TABLES;

        $sql = "SELECT id, orderby 
                FROM {$_TABLES[self::$table]}
                ORDER BY orderby ASC;";
        //echo $sql;die;
        $result = DB_query($sql);

        $order = 10;
        $stepNumber = 10;
        while ($A = DB_fetchArray($result, false)) {

            if ($A['orderby'] != $order) {  // only update incorrect ones
                $sql = "UPDATE {$_TABLES[self::$table]}
                    SET orderby = '$order' 
                    WHERE id = '{$A['id']}'";
                DB_query($sql, 1);
                if (DB_error()) {
                    COM_errorLog("Workflow::ReOrder() SQL error: $sql", 1);
                }
            }
            $order += $stepNumber;
        }

    }


    /**
    *   Move a workflow up or down the admin list.
    *
    *   @param  string  $id     Workflow database ID
    *   @param  string  $where  Direction to move (up or down)
    */
    public static function moveRow($id, $where)
    {
        global $_TABLES;

        $retval = '';
        $id = DB_escapeString($id);

        switch ($where) {
        case 'up': 
            $oper = '-';
            break;
        case 'down': 
            $oper = '+';
            break;
        default:
            return;
        }
        $sql = "UPDATE {$_TABLES[self::$table]}
                SET orderby = orderby $oper 11 
                WHERE id = '$id'";
        //echo $sql;die;
        DB_query($sql, 1);
        if (!DB_error()) {
            self::ReOrder();
        } else {
            COM_errorLog("Workflow::moveRow() SQL error: $sql", 1);
        }
    }


    /**
    *   Get the next view in the workflow to be displayed.
    *   This function receives the name of the current view, then looks
    *   in it's array of views to return the next in line.
    *
    *   @param  string  $currview   Current view
    *   @return string              Next view in line
    */
    public static function getNextView($currview = '')
    {
        global $_PP_CONF;

        /** Load the views, if not done already */
        self::Init();

        // If the current view is empty, or isn't part of our array,
        // then set the current key to -1 so we end up returning value 0.
        if ($currview == '') {
            $curr_key = -1;
        } else {
            $curr_key = array_search($currview, $_PP_CONF['workflows']);
            if ($curr_key === false) $curr_key = -1;
        }

        if ($curr_key > -1) {
            Cart::setSession('prevpage', $_PP_CONF['workflows'][$curr_key]);
            //$_SESSION[PP_CART_VAR]['prevpage'] = 
            //        $_PP_CONF['workflows'][$curr_key];
        }
        if (isset($_PP_CONF['workflows'][$curr_key + 1])) {
            $view = $_PP_CONF['workflows'][$curr_key + 1];
        } else {
            $view = 'vieworder';
        }

        /*if (isset($_SESSION[PP_CART_VAR]['prevpage']) &&
            !empty($_SESSION[PP_CART_VAR]['prevpage'])) {
            $view = $_SESSION[PP_CART_VAR]['prevpage'];
            $_SESSION[PP_CART_VAR]['prevpage'] = '';
        } else {
            $view = $currview;
        }*/

        return $view;
    }

}   // class Workflow

?>
