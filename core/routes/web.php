<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','Home@index');
Route::get('/home','Home@index');
Route::get('/brandlist','Brand@index');
Route::get('/departmentlist','Department@index');
Route::get('/assettypelist','AssetType@index');
Route::get('/locationlist','Location@index');
Route::get('/employeeslist','Employees@index');
Route::get('/supplierlist','Supplier@index');
Route::get('/userlist','User@index');
Route::get('/settinglist','Settings@index');
Route::get('/assetlist','Asset@index');
Route::get('/assetlist/detail/{id}','Asset@detail');
Route::get('/assetlist/generatelabel/{id}', 'Asset@generatelabel');
Route::get('/componentlist','Component@index');
Route::get('/componentlist/detail/{componentid}','Component@detail');
Route::get('/maintenancelist','Maintenance@index');
Route::get('/depreciationlist','Depreciation@index');


//report
Route::get('/reports/assetactivity','Reports@assetactivity');
Route::get('/reports/componentactivity','Reports@componentactivity');
Route::get('/reports/maintenance','Reports@maintenance');
Route::get('/reports/bytype','Reports@bytype');
Route::get('/reports/bystatus','Reports@bystatus');
Route::get('/reports/bylocation','Reports@bylocation');
Route::get('/reports/bysupplier','Reports@bysupplier');
Route::get('/reports/allreports','Reports@allreports');

Route::get('logout', 'Auth\LoginController@logout');

//login
Route::get('logout', 'Auth\LoginController@logout');
Route::get('login', 'Auth\LoginController@showLoginForm');
Route::get('login/getapplication','Auth\LoginController@getapplication');
Route::post('login', 'Auth\LoginController@authenticate');
Route::post('login', [ 'as' => 'login', 'uses' => 'Auth\LoginController@authenticate']);


//Home API
Route::get('home/totalbalance', 'Home@totalbalance');
Route::get('home/assetbytype', 'Home@assetbytype');
Route::get('home/assetbystatus', 'Home@assetbystatus');
Route::get('home/recentassetactivity', 'Home@recentassetactivity');
Route::get('home/recentcomponentactivity', 'Home@recentcomponentactivity');

//Brand API
Route::get('brand', 'Brand@getdata');
Route::get('listbrand', 'Brand@getrows');
Route::post('savebrand', 'Brand@save');
Route::post('updatebrand', 'Brand@update');
Route::post('deletebrand', 'Brand@delete');
Route::post('brandbyid', 'Brand@byid');

//Department API
Route::get('department', 'Department@getdata');
Route::get('listdepartment', 'Department@getrows');
Route::post('savedepartment', 'Department@save');
Route::post('updatedepartment', 'Department@update');
Route::post('deletedepartment', 'Department@delete');
Route::post('departmentbyid', 'Department@byid');

//Asset Type API
Route::get('assettype', 'AssetType@getdata');
Route::get('listassettype', 'AssetType@getrows');
Route::post('saveassettype', 'AssetType@save');
Route::post('updateassettype', 'AssetType@update');
Route::post('deleteassettype', 'AssetType@delete');
Route::post('assettypebyid', 'AssetType@byid');

//Location API
Route::get('location', 'Location@getdata');
Route::get('listlocation', 'Location@getrows');
Route::post('savelocation', 'Location@save');
Route::post('updatelocation', 'Location@update');
Route::post('deletelocation', 'Location@delete');
Route::post('locationbyid', 'Location@byid');

//Employees API
Route::get('employees', 'Employees@getdata');
Route::get('listemployees', 'Employees@getrows');
Route::post('saveemployees', 'Employees@save');
Route::post('updateemployees', 'Employees@update');
Route::post('deleteemployees', 'Employees@delete');
Route::post('employeesbyid', 'Employees@byid');

//Supplier API
Route::get('supplier', 'Supplier@getdata');
Route::get('listsupplier', 'Supplier@getrows');
Route::post('savesupplier', 'Supplier@save');
Route::post('updatesupplier', 'Supplier@update');
Route::post('deletesupplier', 'Supplier@delete');
Route::post('supplierbyid', 'Supplier@byid');

//User API
Route::get('user', 'User@getdata');
Route::get('listuser', 'User@getrows');
Route::post('saveuser', 'User@save');
Route::post('updateuser', 'User@update');
Route::post('deleteuser', 'User@delete');
Route::post('userbyid', 'User@byid');

//Settings API
Route::get('settings', 'Settings@getdata');
Route::post('updatesettings', 'Settings@update');

//Asset API
Route::get('asset', 'Asset@getdata');
Route::get('listasset', 'Asset@getrows');
Route::post('saveasset', 'Asset@save');
Route::post('updateasset', 'Asset@update');
Route::post('deleteasset', 'Asset@delete');
Route::post('assetbyid', 'Asset@byid');
Route::post('savecheckout', 'Asset@savecheckout');
Route::post('savecheckin', 'Asset@savecheckin');
Route::post('historyassetbyid', 'Asset@historyassetbyid');
Route::get('asset/generateproductcode', 'Asset@generateproductcode');
Route::get('assetnotbyid', 'Asset@isnotbyid');

//Component API
Route::get('component', 'Component@getdata');
Route::get('listcomponent', 'Component@getrows');
Route::post('savecomponent', 'Component@save');
Route::post('updatecomponent', 'Component@update');
Route::post('deletecomponent', 'Component@delete');
Route::post('savecheckoutcomponent', 'Component@savecheckout');
Route::post('savecheckincomponent', 'Component@savecheckin');
Route::post('componentbyid', 'Component@byid');
Route::post('singlehistorycomponentbyid', 'Component@singlehistorycomponentbyid');
Route::get('component/generateproductcode', 'Component@generateproductcode');
Route::post('componentassetbyid', 'Component@assetsbyid');
Route::post('historycomponentbyid', 'Component@historycomponentbyid');
Route::get('componentnotbyid', 'Component@isnotbyid');

//Maintenance API
Route::get('maintenance', 'Maintenance@getdata');
Route::get('listmaintenance', 'Maintenance@getrows');
Route::post('savemaintenance', 'Maintenance@save');
Route::post('updatemaintenance', 'Maintenance@update');
Route::post('deletemaintenance', 'Maintenance@delete');
Route::post('maintenancebyid', 'Maintenance@byid');
Route::post('maintenanceassetsbyid', 'Maintenance@assetsbyid');


//File API
Route::post('fileassetsbyid', 'FileData@getdataaset');
Route::post('filecomponentbyid', 'FileData@getdatacomponent');
Route::post('savefile', 'FileData@save');
Route::post('deletefile', 'FileData@delete');


//Depreciation API
Route::get('depreciation', 'Depreciation@getdata');
Route::get('listdepreciation', 'Depreciation@getrows');
Route::post('savedepreciation', 'Depreciation@save');
Route::post('updatedepreciation', 'Depreciation@update');
Route::post('deletedepreciation', 'Depreciation@delete');
Route::post('depreciationbyid', 'Depreciation@byid');
Route::post('depreciationvaluebyid', 'Depreciation@calculator');
Route::post('componentdepreciationvaluebyid', 'Depreciation@calculatorcomponent');

//Report API
Route::get('listassetactivityreport', 'Reports@getassetactivityreport');
Route::get('listcomponentactivityreport', 'Reports@getcomponentactivityreport');
Route::get('getdatabytypereport', 'Reports@getdatabytypereport');
Route::get('getdatabystatusreport', 'Reports@getdatabystatusreport');
Route::get('getdatabysupplierreport', 'Reports@getdatabysupplierreport');
Route::get('getdatabylocationreport', 'Reports@getdatabylocationreport');
