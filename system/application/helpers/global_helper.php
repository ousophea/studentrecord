<?php

/**
 * Helper
 * @package Customer Helper
 * @author Vannak
 * @path application/helpers/global_helper.php
 * @update now
 */

/**
 * function return segment name
 * @param $i integer parameter default 1 to define the segment state number
 * @return String
 * @example echo segment(1); //for getting the controller name
 */
function segment($i = 1) {
    $ci = & get_instance();
    $ci->load->helper('url');
    return $ci->uri->segment($i);
}

/**
 * function return the table data manager
 * @param $table_object table object parameter passed by the sql query
 * @param $arr_column associative array parameter for select the field to be display with the column field
 * @return String
 * @example $arr_select_field = array(
  'ID' => 'con_id',
  'English Name' => 'con_en_name',
  'Address' => 'con_address'
  );
  echo table_manager($this->db->get('contacts'), $arr_select_field);
 */
function table_manager($table_object, $arr_column, $control = FALSE, $format = NULL, $total = NULL) {
    if (!is_array($arr_column) || count($arr_column) <= 0)
        return FALSE;
    $string_table = form_open('', array('name' => 'form_manager'));
    $string_table .= '<table class="table table-bordered table-striped" cellpadding="0" cellspacing="0" border="0">';

    //start write table header
    $string_table .= '<tr clas="tbl_header">';
    if ($control)
        $string_table .= '<th><input type="checkbox" class="check_all" /></th>';
    foreach ($arr_column as $header => $column) {
        $string_table .= '<th>' . $header . '</th>';
    }
    $string_table .= '</tr>';

    //start write table data
    if ($table_object->num_rows() > 0) {

        foreach ($table_object->result() as $arr_data) {
            //    =============== Use format money=====================
            if ($format == NULL) {
                $f = NULL;
            } else {
                $f = 1;
            }//=============================End format money========================

            $string_table .= '<tr>';
            $check_first = TRUE;
            foreach ($arr_column as $column) {
                if ($check_first) {
                    if ($control)
                        $string_table .= '<td><input type="checkbox" class="check" name="check_select[]" value="' . $arr_data->$column . '" /></td>';
                    $check_first = FALSE;
                }
                if ($format == NULL) { //////////=========Not aply money format=================
                    $string_table .= '<td>' . $arr_data->$column . '</td>';
                } else {
                    if ($f > 2) {
                        $string_table .= '<td class="td_right">' . formatMoney($arr_data->$column, TRUE) . '</td>';
                    } else {
                        $string_table .= '<td>' . $arr_data->$column . '</td>';
                    }
                }
                $f++;
            }
            $string_table .= '</tr>';
        }
        if ($total != NULL) {
            $string_table .= '<tr class="total"><td class="td_right" colspan="3">សរុប</td>';
            
            foreach($total as $col_total_result){
                $string_table .= '<td class="td_right">' .  formatMoney($col_total_result,TRUE) . '</td>';
            }
            $string_table .="</tr>";
//            $string_table .= '<td class="td_right">' . formatMoney($arr_data->$column, TRUE) . '</td>';
        }
    } else {
        $string_table .= '<tr><td colspan="' . count($arr_column) . '"><p class="no_record">There is no record.</p></td></tr>';
    }
    $string_table .= '</table>';
    $string_table .= form_close();
    return $string_table;
}

function control_manager() {
    $string = '<div class="control_manager">';
    $string .= anchor(site_url(segment(1) . '/add'), '<i class="icon-plus-sign"></i>Add New', 'class="btn btn-mini" id="add_manager" title="Add New"');
    $string .= nbs();
    $string .= anchor(site_url(segment(1) . '/edit'), '<i class="icon-edit"></i>Edit', 'class="btn btn-mini" id="edit_manager" title="Edit"');
    $string .= nbs();
    $string .= anchor(site_url(segment(1) . '/delete'), '<i class="icon-remove-sign"></i>Delete', 'class="btn btn-mini" id="delete_manager" title="Delete"');
    $string .= '</div>';
    return $string;
}

/**
 * Function create by Sophea
 * 
 */

function menu_left() {
    $ci = & get_instance();
    $ci->load->helper("global_helper");
    $ci->load->model("Model_student");
     return $ci->Model_student->menu_class();
}



?>