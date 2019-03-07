<?php

/* List of installed additional extensions. If extensions are added to the list manually
	make sure they have unique and so far never used extension_ids as a keys,
	and $next_extension_id is also updated. More about format of this file yo will find in 
	FA extension system documentation.
*/

$next_extension_id = 23; // unique id for next installed extension

$installed_extensions = array (
  2 => 
  array (
    'name' => 'Check Printing based on Tom Hallman, USA',
    'package' => 'rep_check_print',
    'version' => '2.4.0-3',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_check_print',
  ),
  3 => 
  array (
    'name' => 'Theme Anterp',
    'package' => 'anterp',
    'version' => '2.4.0-1',
    'type' => 'theme',
    'active' => false,
    'path' => 'themes/anterp',
  ),
  4 => 
  array (
    'name' => 'Theme Bluecollar',
    'package' => 'bluecollar',
    'version' => '2.4.0-3',
    'type' => 'theme',
    'active' => false,
    'path' => 'themes/bluecollar',
  ),
  5 => 
  array (
    'name' => 'Auth_LDAP',
    'package' => 'auth_ldap',
    'version' => '2.4.0-3',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/auth_ldap',
  ),
  6 => 
  array (
    'name' => 'FrontHrm',
    'package' => 'fronthrm',
    'version' => '2.4.0-1',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/FrontHrm',
  ),
  7 => 
  array (
    'package' => 'FrontHrm',
    'name' => 'FrontHrm',
    'version' => '-',
    'available' => '',
    'type' => 'extension',
    'path' => 'modules/FrontHrm',
    'active' => false,
  ),
  8 => 
  array (
    'name' => 'Inventory Items CSV Import',
    'package' => 'import_items',
    'version' => '2.4.0-3',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/import_items',
  ),
  9 => 
  array (
    'name' => 'Inventory History',
    'package' => 'rep_inventory_history',
    'version' => '2.4.0-1',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_inventory_history',
  ),
  10 => 
  array (
    'name' => 'Sales Summary Report',
    'package' => 'rep_sales_summary',
    'version' => '2.4.0-1',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_sales_summary',
  ),
  11 => 
  array (
    'name' => 'Bank Statement w/ Reconcile',
    'package' => 'rep_statement_reconcile',
    'version' => '2.4.0-1',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_statement_reconcile',
  ),
  12 => 
  array (
    'name' => 'Tax inquiry and detailed report on cash basis',
    'package' => 'rep_tax_cash_basis',
    'version' => '2.4.0-1',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_tax_cash_basis',
  ),
  13 => 
  array (
    'name' => 'Report Generator',
    'package' => 'repgen',
    'version' => '2.4.0-4',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/repgen',
  ),
  14 => 
  array (
    'name' => 'Requisitions',
    'package' => 'requisitions',
    'version' => '2.4.0-3',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/requisitions',
  ),
  15 => 
  array (
    'name' => 'Cash Flow Statement Report',
    'package' => 'rep_cash_flow_statement',
    'version' => '2.4.0-2',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_cash_flow_statement',
  ),
  16 => 
  array (
    'name' => 'Annual expense breakdown report',
    'package' => 'rep_annual_expense_breakdown',
    'version' => '2.4.0-2',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_annual_expense_breakdown',
  ),
  17 => 
  array (
    'name' => 'Annual balance breakdown report',
    'package' => 'rep_annual_balance_breakdown',
    'version' => '2.4.0-4',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/rep_annual_balance_breakdown',
  ),
  20 => 
  array (
    'name' => 'Import Paypal transactions',
    'package' => 'import_paypal',
    'version' => '2.4.0-1',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/import_paypal',
  ),
  21 => 
  array (
    'name' => 'Import Transactions',
    'package' => 'import_transactions',
    'version' => '2.4.0-5',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/import_transactions',
  ),
  22 => 
  array (
    'name' => 'Import Multiple Journal Entries',
    'package' => 'import_multijournalentries',
    'version' => '2.4.0-3',
    'type' => 'extension',
    'active' => false,
    'path' => 'modules/import_multijournalentries',
  ),
);
