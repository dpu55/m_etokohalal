<?php
$_LANG['select_method'] = 'How to choose goods:';
$_LANG['by_cat'] = 'According to product category and brand';
$_LANG['by_sn'] = 'According to the product number';
$_LANG['select_cat'] = 'Pilih Kategori Produk:';
$_LANG['select_brand'] = 'Choose product brands:';
$_LANG['goods_list'] = 'Product list:';
$_LANG['src_list'] = 'List of alternatives:';
$_LANG['dest_list'] = 'Selected list:';
$_LANG['input_sn'] = 'Input product number: <br/> (one per line)';
$_LANG['edit_method'] = 'Editing method:';
$_LANG['edit_each'] = 'Edit by item';
$_LANG['edit_all'] = 'Unified editing';
$_LANG['go_edit'] = 'Enter editor';

$_LANG['notice_edit'] = 'The membership price is - 1, which means that the membership price will be calculated according to the discount rate of membership grade.';

$_LANG['goods_class'] = 'Product type';
$_LANG['g_class'][G_REAL] = 'Physical product';
$_LANG['g_class'][G_CARD] = 'Virtual card';

$_LANG['goods_sn'] = 'Item number';
$_LANG['goods_name'] = 'Nama Produk';
$_LANG['market_price'] = 'Harga Pasar';
$_LANG['shop_price'] = 'Shop price';
$_LANG['integral'] = 'Integral purchase';
$_LANG['give_integral'] = 'Presentation points';
$_LANG['goods_number'] = 'Stok';
$_LANG['brand'] = 'Brand';

$_LANG['batch_edit_ok'] = 'Successful batch modification';

$_LANG['export_format'] = 'Data format';
$_LANG['export_ecshop'] = 'ECSHOP supports data format';
$_LANG['export_taobao'] = 'Taobao Assistant Support Data Format';
$_LANG['export_taobao46'] = 'Taobao Assistant 4.6 Supports Data Format';
$_LANG['export_paipai'] = 'Photo Assistant Support Data Format';
$_LANG['export_paipai3'] = 'Photo Assistant 3.0 Supports Data Format';
$_LANG['goods_cat'] = 'Category:';
$_LANG['csv_file'] = 'Upload batch CSV files：';
$_LANG['notice_file'] = '(The number of goods uploaded once in CSV files should not exceed 1000, and the size of CSV files should not exceed 500K.)';
$_LANG['file_charset'] = 'File encoding：';
$_LANG['download_file'] = 'Download batch CSV files（%s）';
$_LANG['use_help'] = 'Instructions：' .
        '<ol>' .
          '<li>According to the usage habits, download the CSV files of the corresponding languages, such as the files of simplified Chinese language downloaded by mainland Chinese users, and those of traditional Chinese language downloaded by Hong Kong and Taiwan users.；</li>' .
          '<li>Fill in the CSV file, you can use Excel or text editor to open the CSV file；<br />' .
              'When encountering the category of "whether it is a good product", fill in the number 0 or 1, 0 for "no" and 1 for "yes".；<br />' .
              'Fill in the name of the image file with the path for the product picture and the product thumbnail, where the path is relative to the [root directory]/images/path, such as the image path is [root directory]/images/200610/abc.jpg，Just fill in 200610/abc.jpg that will do；<br />' .
               '<font style="color:#FE596A;">If it is Taobao Assistant format, please make sure that the CVS code is the code on the website. If the code is incorrect, you can use editing software to convert the code.</font></li>' .
          '<li>Upload the completed product picture and product thumbnail to the corresponding catalogue, such as: [root catalogue]/images/200610/；<br />'.
              '<font style="color:#FE596A;">Please upload the product picture and the product thumbnail first, then upload the CSV file, otherwise the picture can not be processed.</font></li>' .
          '<li>Select the category of uploaded goods and file coding, upload csv file</li>' .
        '</ol>';

$_LANG['js_languages']['please_select_goods'] = 'Please choose the goods.';
$_LANG['js_languages']['please_input_sn'] = 'Please enter the product number.';
$_LANG['js_languages']['goods_cat_not_leaf'] = 'Please select the bottom level category';
$_LANG['js_languages']['please_select_cat'] = 'Please choose the category you belong to.';
$_LANG['js_languages']['please_upload_file'] = 'Please upload batch CSV files';

// 批量上传商品的字段
$_LANG['upload_goods']['goods_name'] = 'Nama Produk';
$_LANG['upload_goods']['goods_sn'] = 'Product code';
$_LANG['upload_goods']['brand_name'] = 'Product brand';   // 需要转换成brand_id
$_LANG['upload_goods']['market_price'] = 'Market selling price';
$_LANG['upload_goods']['shop_price'] = 'Price of our shop';
$_LANG['upload_goods']['integral'] = 'Integral Purchase Quota';
$_LANG['upload_goods']['original_img'] = 'Primitive product Map';
$_LANG['upload_goods']['goods_img'] = 'Product image';
$_LANG['upload_goods']['goods_thumb'] = 'Product thumbnails';
$_LANG['upload_goods']['keywords'] = 'Kata Kunci Produk';
$_LANG['upload_goods']['goods_brief'] = 'Simple description';
$_LANG['upload_goods']['goods_desc'] = 'Detailed description';
$_LANG['upload_goods']['goods_weight'] = 'Product weight (kg)';
$_LANG['upload_goods']['goods_number'] = 'Inventory quantity';
$_LANG['upload_goods']['warn_number'] = 'Stock Warning Quantity';
$_LANG['upload_goods']['is_best'] = 'Whether recommended';
$_LANG['upload_goods']['is_new'] = 'Is it new?';
$_LANG['upload_goods']['is_hot'] = 'Is it selling well?';
$_LANG['upload_goods']['is_on_sale'] = 'Is it on the shelf?';
$_LANG['upload_goods']['is_alone_sale'] = 'Can it be sold as an ordinary product?';
$_LANG['upload_goods']['is_real'] = 'Is it a physical product?';

$_LANG['batch_upload_ok'] = 'Successful batch upload';
$_LANG['goods_upload_confirm'] = 'Batch Upload Confirmation';
?>