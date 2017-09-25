<?php
/*
*                                         $$\                          $$\                             $$\                 
*                                          $$ |                         $$ |                            $$ |                
* $$$$$$$\  $$$$$$\  $$$$$$$\   $$$$$$$\ $$$$$$\    $$$$$$\  $$$$$$$\ $$$$$$\    $$$$$$$\      $$$$$$\  $$$$$$$\   $$$$$$\  
*$$  _____|$$  __$$\ $$  __$$\ $$  _____|\_$$  _|   \____$$\ $$  __$$\\_$$  _|  $$  _____|    $$  __$$\ $$  __$$\ $$  __$$\ 
*$$ /      $$ /  $$ |$$ |  $$ |\$$$$$$\    $$ |     $$$$$$$ |$$ |  $$ | $$ |    \$$$$$$\      $$ /  $$ |$$ |  $$ |$$ /  $$ |
*$$ |      $$ |  $$ |$$ |  $$ | \____$$\   $$ |$$\ $$  __$$ |$$ |  $$ | $$ |$$\  \____$$\     $$ |  $$ |$$ |  $$ |$$ |  $$ |
*\$$$$$$$\ \$$$$$$  |$$ |  $$ |$$$$$$$  |  \$$$$  |\$$$$$$$ |$$ |  $$ | \$$$$  |$$$$$$$  |$$\ $$$$$$$  |$$ |  $$ |$$$$$$$  |
* \_______| \______/ \__|  \__|\_______/    \____/  \_______|\__|  \__|  \____/ \_______/ \__|$$  ____/ \__|  \__|$$  ____/ 
*                                                                                            $$ |                $$ |      
*                                                                                             $$ |                $$ |      
*                                                                                             \__|                \__|                              
*/
 //constants for navigating folders
 define("_LIB_FOLDER", "lib");
 define("_API_FOLDER", "api");
 //db details
 define("_DB_HOST", "127.0.0.1");
 define("_DB_USER", "mihaisitaru");
 define("_DB_PASSWORD", "");
 define("_DB_NAME", "bazar_shop_online");
 define("_DB_PORT", "3306");
 //constants for errors
 /**************************************************************************************************************************/
 #connection
 define("_ERROR_DB_CONNECTION_CODE", "db1000");
 define("_ERROR_DB_CONNECTION_MSG", "Can't connect to the specified Database with the specified IP.");
 #user
 define("_ERROR_EMAIL_OR_PASSWORD_NOT_SPECIFIED_CODE", "u1001");
 define("_ERROR_EMAIL_OR_PASSWORD_NOT_SPECIFIED_MSG", "Email or password not specified");
 define("_ERROR_EMAIL_NOT_SPECIFIED_CODE", "u1001e");
 define("_ERROR_EMAIL_NOT_SPECIFIED_MSG", "Email not specified");
 define("_ERROR_EMAIL_OR_PASSWORD_NOT_CORRECT_CODE", "u1002");
 define("_ERROR_EMAIL_OR_PASSWORD_NOT_CORRECT_MSG", "Email or password is not correct");
 define("_ERROR_EMAIL_NOT_CORRECT_CODE", "u1002e");
 define("_ERROR_EMAIL_NOT_CORRECT_MSG", "Email is not correct");
 define("_ERROR_USER_NOT_LOGGED_IN_CODE", "u1003");
 define("_ERROR_USER_NOT_LOGGED_IN_MSG", "You are not logged in. Please authenticate first in order to get access to this functionality.");
 define("_ERROR_REQUIRED_STAR_FIELD_CODE", "u1004");
 define("_ERROR_REQUIRED_STAR_FIELD_MSG", "*");
 define("_ERROR_REQUIRED_FIELD_CODE", "u1005");
 define("_ERROR_REQUIRED_FIELD_MSG", "*required field");
 define("_ERROR_USER_MUST_LOGIN_FIRST_CODE", "u1006");
 define("_ERROR_USER_MUST_LOGIN_FIRST_MSG", "You are not logged in. Please login first in order to be able to logout.");
 define("_ERROR_USER_NOT_RECOGNIZED_CODE", "u1007");
 define("_ERROR_USER_NOT_RECOGNIZED_MSG", "There is no account with this email. Do you want to create one?");
 define("_ERROR_DETAILS_NOT_SPECIFIED_CODE", "u1008");
 define("_ERROR_DETAILS_NOT_SPECIFIED_MSG", "All fields are required. Please add values to them.");
 define("_ERROR_EMAIL_ALREADY_EXISTS_CODE", "u1009");
 define("_ERROR_EMAIL_ALREADY_EXISTS_MSG", "An account with this email address already exists. Please choose another one.");
 define("_ERROR_PASSWORDS_DO_NOT_MATCH_CODE", "u1010");
 define("_ERROR_PASSWORDS_DO_NOT_MATCH_MSG", "Inserted passwords do not match. Please try again.");
 define("_ERROR_DETAILS_NOT_UPDATED_CODE", "u1011");
 define("_ERROR_DETAILS_NOT_UPDATED_MSG", "We could't update your info. Please try again.");
 define("_ERROR_ACCOUNT_NOT_CREATED_CODE", "u1012");
 define("_ERROR_ACCOUNT_NOT_CREATED_MSG", "Account not created. Please try again.");
 #category
 define("_ERROR_CATEGORY_NAME_OR_STATUS_NOT_SPECIFIED_CODE", "ca1000");
 define("_ERROR_CATEGORY_NAME_OR_STATUS_NOT_SPECIFIED_MSG", "Category name or status not specified.");
 define("_ERROR_CATEGORY_NOT_CREATED_CODE", "ca1001");
 define("_ERROR_CATEGORY_NOT_CREATED_MSG", "Category not created.");
 define("_ERROR_CATEGORY_NOT_FOUND_CODE", "ca1002");
 define("_ERROR_CATEGORY_NOT_FOUND_MSG", "Category not found.");
 define("_ERROR_CATEGORY_NOT_DELETED_CODE", "ca1003");
 define("_ERROR_CATEGORY_NOT_DELETED_MSG", "Category not deleted.");
 define("_ERROR_CATEGORY_NOT_UPDATED_CODE", "ca1004");
 define("_ERROR_CATEGORY_NOT_UPDATED_MSG", "Category not updated.");
 define("_ERROR_NO_CATEGORY_WAS_FOUND_CODE", "ca1005");
 define("_ERROR_NO_CATEGORY_WAS_FOUND_MSG", "No category was found.");
 define("_ERROR_CATEGORY_ID_NAME_OR_STATUS_NOT_SPECIFIED_CODE", "ca1006");
 define("_ERROR_CATEGORY_ID_NAME_OR_STATUS_NOT_SPECIFIED_MSG", "Category id, name or status not specified.");
 define("_ERROR_CATEGORY_NOT_SPECIFIED_CODE", "ca1007");
 define("_ERROR_CATEGORY_NOT_SPECIFIED_MSG", "Category not specified.");
 #product
 define("_ERROR_PRODUCT_DETAILS_NOT_SPECIFIED_CODE", "p1000");
 define("_ERROR_PRODUCT_DETAILS_NOT_SPECIFIED_MSG", "Product details not specified.");
 define("_ERROR_PRODUCT_NOT_CREATED_CODE", "p1001");
 define("_ERROR_PRODUCT_NOT_CREATED_MSG", "Product not added.");
 define("_ERROR_PRODUCT_NOT_FOUND_CODE", "p1002");
 define("_ERROR_PRODUCT_NOT_FOUND_MSG", "Product not found.");
 define("_ERROR_NO_PRODUCT_WAS_FOUND_CODE", "p1003");
 define("_ERROR_NO_PRODUCT_WAS_FOUND_MSG", "No product was found.");
 define("_ERROR_PRODUCT_NOT_DELETED_CODE", "p1004");
 define("_ERROR_PRODUCT_NOT_DELETED_MSG", "Product not deleted.");
 define("_ERROR_PRODUCT_NOT_UPDATED_CODE", "p1005");
 define("_ERROR_PRODUCT_NOT_UPDATED_MSG", "Product not updated.");
 define("_ERROR_IMAGE_NOT_SELECTED_CODE", "p1006");
 define("_ERROR_IMAGE_NOT_SELECTED_MSG", "Image not selected.");
 define("_ERROR_IMAGE_NOT_UPLOADED_CODE", "p1007");
 define("_ERROR_IMAGE_NOT_UPLOADED_MSG", "Image not uploaded.");
 define("_ERROR_IMAGE_NOT_SPECIFIED_CODE", "p1008");
 define("_ERROR_IMAGE_NOT_SPECIFIED_MSG", "Image not specified.");
 define("_ERROR_IMAGE_NOT_DELETED_CODE", "p1009");
 define("_ERROR_IMAGE_NOT_DELETED_MSG", "Image not deleted.");
 define("_ERROR_PRODUCTS_NOT_DEFINED_CODE", "p1010");
 define("_ERROR_PRODUCTS_NOT_DEFINED_MSG", "Products not defined.");
 define("_ERROR_NO_PRODUCT_IN_SPECIFIED_CATEGORY_FOUND_CODE", "p1011");
 define("_ERROR_NO_PRODUCT_IN_SPECIFIED_CATEGORY_FOUND_MSG", "No product in specified category found.");
 define("_ERROR_PRODUCT_OR_CATEGORY_NOT_FOUND_CODE", "p1012");
 define("_ERROR_PRODUCT_OR_CATEGORY_NOT_FOUND_MSG", "Product or category not found.");
 define("_ERROR_PRODUCT_IMAGE_NOT_FOUND_CODE", "p1013");
 define("_ERROR_PRODUCT_IMAGE_NOT_FOUND_MSG", "Product image not found.");
 define("_ERROR_NO_IMAGE_FOUND_CODE", "p1014");
 define("_ERROR_NO_IMAGE_FOUND_MSG", "No image found.");
 define("_ERROR_NO_HOTDEAL_WAS_FOUND_CODE", "p1015");
 define("_ERROR_NO_HOTDEAL_WAS_FOUND_MSG", "No product was found.");
 define("_ERROR_NO_DATA_WAS_FOUND_CODE", "p1016");
 define("_ERROR_NO_DATA_WAS_FOUND_MSG", "No data was found.");
 define("_ERROR_NO_CUSTOMER_SUPPORT_WAS_FOUND_CODE", "p1017");
 define("_ERROR_NO_CUSTOMER_SUPPORT_WAS_FOUND_MSG", "No customer support data was found.");
 #order
 define("_ERROR_ORDER_NOT_SPECIFIED_CODE", "o1000");
 define("_ERROR_ORDER_NOT_SPECIFIED_MSG", "Order not specified."); 
 define("_ERROR_ORDER_NOT_FOUND_CODE", "o1001");
 define("_ERROR_ORDER_NOT_FOUND_MSG", "Order not found.");  
 define("_ERROR_CART_IS_EMPTY_CODE", "o1002");
 define("_ERROR_CART_IS_EMPTY_MSG", "Cart is empty."); 
 define("_ERROR_ORDER_NOT_PROCESSED_CODE", "o1003");
 define("_ERROR_ORDER_NOT_PROCESSED_MSG", "Order not processed."); 
 define("_ERROR_CART_NOT_EMPTIED_OUT_CODE", "o1004");
 define("_ERROR_CART_NOT_EMPTIED_OUT_MSG", "Cart not emptied out."); 
 #currency
 define("_ERROR_CURRENCY_NAME_CODE_OR_STATUS_NOT_SPECIFIED_CODE", "cu1000");
 define("_ERROR_CURRENCY_NAME_CODE_OR_STATUS_NOT_SPECIFIED_MSG", "Currency name, code or status not specified.");
 define("_ERROR_CURRENCY_NOT_CREATED_CODE", "cu1001");
 define("_ERROR_CURRENCY_NOT_CREATED_MSG", "Currency not created.");
 define("_ERROR_CURRENCY_NOT_FOUND_CODE", "cu1002");
 define("_ERROR_CURRENCY_NOT_FOUND_MSG", "Currency not found.");
 define("_ERROR_CURRENCY_NOT_DELETED_CODE", "cu1003");
 define("_ERROR_CURRENCY_NOT_DELETED_MSG", "Currency not deleted.");
 define("_ERROR_CURRENCY_NOT_UPDATED_CODE", "cu1004");
 define("_ERROR_CURRENCY_NOT_UPDATED_MSG", "Currency not updated.");
 define("_ERROR_NO_CURRENCY_WAS_FOUND_CODE", "cu1005");
 define("_ERROR_NO_CURRENCY_WAS_FOUND_MSG", "No currency was found.");
 define("_ERROR_CURRENCY_CODE_OR_STATUS_NOT_SPECIFIED_CODE", "cu1006");
 define("_ERROR_CURRENCY_CODE_OR_STATUS_NOT_SPECIFIED_MSG", "Currency code or status not specified.");
 define("_ERROR_CURRENCY_CODE_NAME_OR_STATUS_NOT_SPECIFIED_CODE", "cu1007");
 define("_ERROR_CURRENCY_CODE_NAME_OR_STATUS_NOT_SPECIFIED_MSG", "Currency code, name or status not specified.");