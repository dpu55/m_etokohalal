<?php
/* 商品分类字段信息 */
$_LANG['cat_id'] = 'Id';
$_LANG['cat_name'] = 'Kategori Produk';
$_LANG['isleaf'] = 'Not allow';
$_LANG['noleaf'] = 'Allow';
$_LANG['keywords'] = 'Kata Kunci';
$_LANG['cat_desc'] = 'Category description';
$_LANG['parent_id'] = 'Kategori';
$_LANG['sort_order'] = 'Sortir';
$_LANG['measure_unit'] = 'Jumlah Unit';
$_LANG['delete_info'] = 'Delete select';
$_LANG['category_edit'] = 'Edit category';
$_LANG['move_goods'] = 'Pindahi Produk';
$_LANG['cat_top'] = 'Top category';
$_LANG['show_in_nav'] = 'Apakah tampil dalam papan navigasi?';
$_LANG['cat_style'] = 'Tampilan Kategori';
$_LANG['is_show'] = 'Tampilkan';
$_LANG['show_in_index'] = 'Rekomendasi Pengaturan untuk Halaman Utama';
$_LANG['is_show_cat_pic'] = 'Whether to Set Recommendation for Home Page';
$_LANG['cat_pic'] = 'Unggah materi iklan';
$_LANG['cat_pic_url'] = 'Shop Advertising Map Links';
$_LANG['cat_goods_limit'] = 'Number of such items displayed on the home page';
$_LANG['notice_show_in_index'] = 'This setting can display the recommended items in the latest, popular and recommendation section of the homepage.';
$_LANG['goods_number'] = 'Jumlah Produk';
$_LANG['grade'] = 'Jumlah interval harga';
$_LANG['notice_grade'] = 'Opsi ini menunjukkan jumlah klasifikasi antara harga terendah dan harga tertinggi dari komoditas di bawah klasifikasi. Mengisi angka 0 menunjukkan tidak dinilai, paling banyak tidak melebihi 10.';
$_LANG['short_grade'] = 'Level Hargaing';

$_LANG['nav'] = 'Navigation bar';
$_LANG['index_new'] = 'Terbaru';
$_LANG['index_best'] = 'Direkomendasikan';
$_LANG['index_hot'] = 'Hot';

$_LANG['back_list'] = 'Back';
$_LANG['continue_add'] = 'Add category';

$_LANG['notice_style'] = 'Anda dapat menentukan file style sheet untuk setiap kategori komoditas. ';

/* 操作提示信息 */
$_LANG['catname_empty'] = 'category name is not empty!';
$_LANG['catname_exist'] = 'The same category name already exists!';
$_LANG["parent_isleaf"] = 'The selected category cannot be final!';
$_LANG["cat_isleaf"] = 'It is not the final classification or there are still goods under this classification, you can not delete them!';
$_LANG["cat_noleaf"] = 'There are other sub-classifications below, which can not be modified to final classification!';
$_LANG["is_leaf_error"] = 'The selected upper classification cannot be the current classification or the lower classification of the current classification!';
$_LANG['grade_error'] = 'Price classification quantity can only be an integer within 0-10';

$_LANG['catadd_succed'] = 'Successful addition of new commodity classification!';
$_LANG['catedit_succed'] = 'Successful category editor of Commodities!';
$_LANG['catdrop_succed'] = 'Successful deletion of commodity category!';
$_LANG['catremove_succed'] = 'Successful category transfer of Commodities!';
$_LANG['move_cat_success'] = 'Classification of Transferred Commodities has been successfully completed!';

$_LANG['cat_move_desc'] = 'Kategori apa yang akan ditransfer?';
$_LANG['select_source_cat'] = 'Choose the categories to be transferred';
$_LANG['select_target_cat'] = 'Selection of target category';
$_LANG['source_cat'] = 'Dari keategori ini';
$_LANG['target_cat'] = 'Pindahi';
$_LANG['start_move_cat'] = 'Mulai';
$_LANG['cat_move_notic'] = 'Jika Anda mengubah kategori barang maka Anda dapat mengubah kategori pada laman ini';

$_LANG['cat_move_empty'] = 'You did not choose the right category.!';

$_LANG['sel_goods_type'] = 'Silahkan pilih tipe produk';
$_LANG['sel_filter_attr'] = 'Pilih detail atribut';
$_LANG['filter_attr'] = 'Atribut';
$_LANG['filter_attr_notic'] = 'Atribut penyaringan dapat digunakan untuk menyaring item pada halaman pra-kategorisasi';
$_LANG['filter_attr_not_repeated'] = 'Screening attributes are not repeatable';

/*JS 语言项*/
$_LANG['js_languages']['catname_empty'] = 'category name cannot be empty!';
$_LANG['js_languages']['unit_empyt'] = 'Quantitative units cannot be empty!';
$_LANG['js_languages']['is_leafcat'] = 'The category you selected is a final one. \r\nThe superior category of the new rn category cannot be a final category.';
$_LANG['js_languages']['not_leafcat'] = 'The category you selected is not a final category. \r\nThe category transfer of rn commodities can only be operated between the last category.';
$_LANG['js_languages']['filter_attr_not_repeated'] = 'Screening attributes are not repeatable';
$_LANG['js_languages']['filter_attr_not_selected'] = 'Pilih detail atribut';
$_LANG['notice_cat_name'] = 'If you need to add more than one category, use a half-corner comma to separate the categories.';

$_LANG['cat_expand'] = '[Unfold all]';
$_LANG['cat_collect'] = '[All contraction]';

$_LANG['virtual_category_list'] = 'Classified management of virtual commodities';
?>