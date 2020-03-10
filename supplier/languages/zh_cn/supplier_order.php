<?php

/**
 * 鸿宇多用户商城 订单管理语言文件
 * ============================================================================
 * 版权所有 2015-2018 鸿宇科技有限公司，并保留所有权利。
 * 网站地址: http://bbs.hongyuvip.com；
 * ----------------------------------------------------------------------------
 * 仅供学习交流使用，如需商用请购买正版版权。鸿宇不承担任何法律责任。
 * 踏踏实实做事，堂堂正正做人。
 * ============================================================================
 * $Author: Shadow & 鸿宇
 * $Id: order.php 17217 2016-01-19 06:29:08Z Shadow & 鸿宇
 */

/* 订单搜索 */
$_LANG['order_sn'] = 'Nomor pesanan';
$_LANG['consignee'] = 'Penerima';
$_LANG['all_status'] = 'Status pemesanan';

$_LANG['cs'][OS_UNCONFIRMED] = 'Dikonfirmasi';
$_LANG['cs'][CS_AWAIT_PAY] = 'Pembayaran';
$_LANG['cs'][CS_AWAIT_SHIP] = 'Pesanan';
$_LANG['cs'][CS_FINISHED] = 'Selesai';
$_LANG['cs'][PS_PAYING] = 'Membayar';
$_LANG['cs'][OS_CANCELED] = 'Batalkan';
$_LANG['cs'][OS_INVALID] = 'Tidak valid';
$_LANG['cs'][OS_RETURNED] = 'Kembali';
$_LANG['cs'][OS_SHIPPED_PART] = 'Pengiriman sebagian';

/* 订单状态 */
$_LANG['os'][OS_UNCONFIRMED] = 'Belum dikonfirmasi';
$_LANG['os'][OS_CONFIRMED] = 'Dikonfirmasi';
$_LANG['os'][OS_CANCELED] = '<font color = "red"> Batalkan </font>';
$_LANG['os'][OS_INVALID] = '<font color = "red"> Tidak valid </font>';
$_LANG['os'][OS_RETURNED] = '<font color = "red"> Pengembalian </font>';
$_LANG['os'][OS_SPLITED] = 'Dipesan';
$_LANG['os'][OS_SPLITING_PART] = 'Pesanan sebagian';

$_LANG['ss'][SS_UNSHIPPED] = 'Tidak dikirim';
$_LANG['ss'][SS_PREPARING] = 'Stok habis';
$_LANG['ss'][SS_SHIPPED] = 'Dikirim';
$_LANG['ss'][SS_RECEIVED] = 'Konfirmasi penerimaan';
$_LANG['ss'][SS_SHIPPED_PART] = 'Dikirim (beberapa produk)';
$_LANG['ss'][SS_SHIPPED_ING] = 'Pengiriman';

$_LANG['ps'][PS_UNPAYED] = 'Tidak dibayar';
$_LANG['ps'][PS_PAYING] = 'Membayar';
$_LANG['ps'][PS_PAYED] = 'Dibayar';

$_LANG['ss_admin'][SS_SHIPPED_ING] = 'Dalam Pengiriman (Status Penerimaan: Tidak Terkirim)';
/* 订单操作 */
$_LANG['label_operable_act'] = 'Proses yang tersedia saat ini:';
$_LANG['label_action_note'] = 'Catatan:';
$_LANG['label_invoice_note'] = 'Catatan pengiriman:';
$_LANG['label_invoice_no'] = 'Nomor faktur:';
$_LANG['label_cancel_note'] = 'Alasan pembatalan:';
$_LANG['notice_cancel_note'] = '(Ini akan dicatat dalam pesan dari pedagang ke pelanggan)';
$_LANG['op_confirm'] = 'Konfirmasi';
$_LANG['op_pay'] = 'Pembayaran';
$_LANG['op_prepare'] = 'Memilih';
$_LANG['op_ship'] = 'Pengiriman';
$_LANG['op_cancel'] = 'Batalkan';
$_LANG['op_invalid'] = 'Tidak valid';
$_LANG['op_return'] = 'Kembali';
$_LANG['op_unpay'] = 'Tetapkan sebagai tidak dibayar';
$_LANG['op_unship'] = 'Tidak dikirim';
$_LANG['op_cancel_ship'] = 'Batalkan pengiriman';
$_LANG['op_receive'] = 'Diterima';
$_LANG['op_assign'] = 'Ditugaskan untuk';
$_LANG['op_after_service'] = 'Setelah penjualan';
$_LANG['act_ok'] = 'Proses Berhasil';
$_LANG['act_false'] = 'Proses Gagal';
$_LANG['act_ship_num'] = 'Jumlah pesanan ini tidak dapat melebihi jumlah produk yang dipesan';
$_LANG['act_good_vacancy'] = 'Produk kehabisan stok';
$_LANG['act_good_delivery'] = 'Dikirim';
$_LANG['notice_gb_ship'] = 'Catatan: Aktivitas pembelian grup tidak dapat dikirim hingga berhasil diproses';
$_LANG['back_list'] = 'Kembali ke daftar pesanan';
$_LANG['op_remove'] = 'Hapus';
$_LANG['op_you_can'] = 'Apa yang bisa kamu lakukan';
$_LANG['op_split'] = 'Hasilkan faktur';
$_LANG['op_to_delivery'] = 'Untuk mengirim';

/* 订单列表 */
$_LANG['order_amount'] = 'Total Keseluruhan';
$_LANG['total_fee'] = 'Jumlah total';
$_LANG['shipping_name'] = 'Metode pengiriman';
$_LANG['pay_name'] = 'Metode pembayaran';
$_LANG['address'] = 'Alamat';
$_LANG['order_time'] = 'Waktu pemesanan';
$_LANG['detail'] = 'Lihat';
$_LANG['phone'] = 'Ponsel';
$_LANG['group_buy'] = '(Pembelian kelompok)';
$_LANG['error_get_goods_info'] = 'Kesalahan saat memesan informasi produk';
$_LANG['exchange_goods'] = '(Penukaran poin)';

$_LANG['js_languages']['remove_confirm'] = 'Menghapus pesanan akan menghapus semua informasi tentang pesanan. Anda yakin ingin melakukan ini?';

/* 订单搜索 */
$_LANG['label_order_sn'] = 'Nomor pesanan:';
$_LANG['label_all_status'] = 'Status pesanan:';
$_LANG['label_user_name'] = 'Pembeli:';
$_LANG['label_consignee'] = 'Penerima:';
$_LANG['label_email'] = 'Email:';
$_LANG['label_address'] = 'Alamat:';
$_LANG['label_zipcode'] = 'Kode pos:';
$_LANG['label_tel'] = 'Ponsel:';
$_LANG['label_mobile'] = 'Ponsel:';
$_LANG['label_shipping'] = 'Metode pengiriman:';
$_LANG['label_payment'] = 'Metode pembayaran:';
$_LANG['label_order_status'] = 'Status pesanan:';
$_LANG['label_pay_status'] = 'Status pembayaran:';
$_LANG['label_shipping_status'] = 'Status pengiriman:';
$_LANG['label_area'] = 'Daerah:';
$_LANG['label_time'] = 'Waktu pemesanan:';

/* 订单详情 */
$_LANG['prev'] = 'Pesanan sebelumnya';
$_LANG['next'] = 'Pesanan selanjutnya';
$_LANG['print_order'] = 'Pesanan cetak';
$_LANG['print_shipping'] = 'Slip cetak ekspres';
$_LANG['print_order_sn'] = 'Nomor pesanan:';
$_LANG['print_buy_name'] = 'Pembeli:';
$_LANG['label_consignee_address'] = 'Alamat pengiriman:';
$_LANG['no_print_shipping'] = 'Maaf, Anda belum menyiapkan template untuk mencetak pesanan cepat saat ini.';
$_LANG['suppliers_no'] = 'Jangan menentukan pemasok';
$_LANG['restaurant'] = 'Toko kami';

$_LANG['order_info'] = 'Informasi Pemesanan';
$_LANG['base_info'] = 'Informasi Pengiriman';
$_LANG['other_info'] = 'Informasi Lainnya';
$_LANG['consignee_info'] = 'Alamat Pengiriman';
$_LANG['fee_info'] = 'Total Biaya';
$_LANG['action_info'] = 'Informasi Proses';
$_LANG['shipping_info'] = 'Informasi Pengiriman';

$_LANG['label_how_oos'] = 'Stok Kosong:';
$_LANG['label_how_surplus'] = 'Pemrosesan Saldo:';
$_LANG['label_pack'] = 'Kemasan:';
$_LANG['label_card'] = 'Kartu Ucapan:';
$_LANG['label_card_message'] = 'Kartu Ucapan:';
$_LANG['label_order_time'] = 'Waktu Pemesanan:';
$_LANG['label_pay_time'] = 'Waktu Pembayaran:';
$_LANG['label_shipping_time'] = 'Waktu Pengiriman:';
$_LANG['label_sign_building'] = 'Tengara:';
$_LANG['label_best_time'] = 'Waktu Pengiriman Terbaik:';
$_LANG['label_inv_type'] = 'Jenis Faktur:';
$_LANG['label_inv_payee'] = 'Header Faktur:';
$_LANG['label_inv_content'] = 'Konten Faktur:';
$_LANG['label_postscript'] = 'Pesan antar Penjual dan Pembeli:';
$_LANG['label_region'] = 'Daerah:';

$_LANG['label_shop_url'] = 'URL:';
$_LANG['label_shop_address'] = 'Alamat:';
$_LANG['label_service_phone'] = 'Ponsel:';
$_LANG['label_print_time'] = 'Waktu cetak:';

$_LANG['label_suppliers'] = 'Pilih pemasok:';
$_LANG['label_agency'] = 'Kantor:';
$_LANG['suppliers_name'] = 'Pemasok';

$_LANG['product_sn'] = 'ID Produk';
$_LANG['goods_info'] = 'Informasi produk';
$_LANG['goods_name'] = 'Nama produk';
$_LANG['goods_name_brand'] = 'Nama Produk [Merek]';
$_LANG['goods_sn'] = 'ID Produk';
$_LANG['goods_price'] = 'Harga';
$_LANG['goods_number'] = 'Jumlah';
$_LANG['goods_attr'] = 'Atribut';
$_LANG['goods_delivery'] = 'Kuantitas dikirim';
$_LANG['goods_delivery_curr'] = 'Jumlah pesanan ini';
$_LANG['storage'] = 'Stok';
$_LANG['subtotal'] = 'Subtotal';
$_LANG['label_total'] = 'Total:';
$_LANG['label_total_weight'] = 'Berat komoditas:';

$_LANG['label_goods_amount'] = 'Total Harga:';
$_LANG['label_discount'] = 'Diskon:';
$_LANG['label_tax'] = 'Faktur Pajak:';
$_LANG['label_shipping_fee'] = 'Biaya Pengiriman:';
$_LANG['label_insure_fee'] = 'Biaya Tertanggung:';
$_LANG['label_insure_yn'] = 'Apakah akan mengasuransikan:';
$_LANG['label_pay_fee'] = 'Biaya Pembayaran:';
$_LANG['label_pack_fee'] = 'Biaya Packing:';
$_LANG['label_card_fee'] = 'Biaya Tambahan:';
$_LANG['label_money_paid'] = 'Total yang Dibayarkan:';
$_LANG['label_surplus'] = 'Gunakan saldo:';
$_LANG['label_integral'] = 'Gunakan poin:';
$_LANG['label_bonus'] = 'Menggunakan Kupon:';
$_LANG['label_order_amount'] = 'Total Pesanan:';
$_LANG['label_money_dues'] = 'Total Keseluruhan:';
$_LANG['label_money_refund'] = 'Jumlah yang akan dikembalikan:';
$_LANG['label_to_buyer'] = 'Pesan dari pelanggan ke pelanggan:';
$_LANG['save_order'] = 'Simpan pesanan';
$_LANG['notice_gb_order_amount'] = '(Catatan: jika ada deposit untuk pembelian grup, Anda hanya perlu membayar deposit dan biaya pembayaran yang sesuai untuk pertama kalinya)';

$_LANG['action_user'] = 'Operator:';
$_LANG['action_time'] = 'Waktu';
$_LANG['order_status'] = 'Status pemesanan';
$_LANG['pay_status'] = 'Status pembayaran';
$_LANG['shipping_status'] = 'Status pengiriman';
$_LANG['action_note'] = 'Komentar';
$_LANG['pay_note'] = 'Catatan pembayaran:';

$_LANG['sms_time_format'] = 'm pada hari j';
$_LANG['order_shipped_sms'] = 'Pesanan Anda %s telah dikirim dari %s [ %s]';
$_LANG['order_splited_sms'] = 'Pesanan Anda %s, %s ada di %s [ %s]';
$_LANG['order_removed'] = 'Pesanan berhasil dihapus.';
$_LANG['return_list'] = 'Kembali ke daftar pesanan';

/* 订单处理提示 */
$_LANG['surplus_not_enough'] = 'Pesanan dibayar dengan saldo %s dan saldo pengguna sekarang tidak cukup';
$_LANG['integral_not_enough'] = 'Pesanan dibayar dengan poin %s, dan sekarang pengguna memiliki poin yang tidak mencukupi';
$_LANG['bonus_not_available'] = 'Pesanan ini dibayar dengan kupon, sekarang kupon tidak tersedia';

/* 购货人信息 */
$_LANG['display_buyer'] = 'Tampilkan Informasi Pembeli';
$_LANG['buyer_info'] = 'Informasi Pembeli';
$_LANG['pay_points'] = 'Poin Konsumsi';
$_LANG['rank_points'] = 'Poin Tingkat';
$_LANG['user_money'] = 'Saldo Akun';
$_LANG['email'] = 'Email';
$_LANG['rank_name'] = 'Tingkat Anggota';
$_LANG['bonus_count'] = 'Jumlah Kupon';
$_LANG['zipcode'] = 'Kode Pos';
$_LANG['tel'] = 'Ponsel';
$_LANG['mobile'] = 'Ponsel';

/* 合并订单 */
$_LANG['order_sn_not_null'] = 'Silakan isi nomor pesanan yang akan digabung';
$_LANG['two_order_sn_same'] = 'Dua nomor pesanan yang akan digabung tidak boleh sama';
$_LANG['order_not_exist'] = 'Pesanan %s tidak ada';
$_LANG['os_not_unconfirmed_or_confirmed'] = 'Status pesanan untuk %s tidak "Tidak Dikonfirmasi" atau "Dikonfirmasi"';
$_LANG['ps_not_unpayed'] = 'Status pembayaran untuk pesanan %s bukan "tidak dibayar"';
$_LANG['ss_not_unshipped'] = 'Pesanan %s memiliki status pengiriman selain "Tidak Dikirim"';
$_LANG['order_user_not_same'] = 'Dua pesanan yang akan digabung tidak ditempatkan oleh pengguna yang sama';
$_LANG['merge_invalid_order'] = 'Maaf, pesanan yang Anda pilih untuk digabung tidak diizinkan digabung.';

$_LANG['from_order_sn'] = 'Dari pesanan:';
$_LANG['to_order_sn'] = 'Pesanan utama:';
$_LANG['merge'] = 'Gabungkan';
$_LANG['notice_order_sn'] = 'Ketika kedua pesanan tidak setuju, informasi pesanan gabungan (seperti: metode pembayaran, metode pengiriman, pengemasan, kartu ucapan, kupon, dll.) Tunduk pada pesanan utama.';
$_LANG['js_languages']['confirm_merge'] = 'Anda yakin ingin menggabungkan kedua pesanan?';

/* 批处理 */
$_LANG['pls_select_order'] = 'Silakan pilih pesanan yang ingin diselesaikan';
$_LANG['no_fulfilled_order'] = 'Tidak ada pesanan yang sesuai';
$_LANG['updated_order'] = 'Pesanan yang diperbarui:';
$_LANG['order'] = 'Memesan:';
$_LANG['confirm_order'] = 'Pesanan berikut tidak dapat diatur ke status dikonfirmasi';
$_LANG['invalid_order'] = 'Pesanan berikut tidak dapat diatur ke tidak valid';
$_LANG['cancel_order'] = 'Pesanan berikut tidak dapat dibatalkan';
$_LANG['remove_order'] = 'Pesanan berikut tidak dapat dihapus';

/* 编辑订单打印模板 */
$_LANG['edit_order_templates'] = 'Edit templat cetak pesanan';
$_LANG['template_resetore'] = 'Pulihkan templat';
$_LANG['edit_template_success'] = 'Perubahan pesanan berhasil dilakukan!';
$_LANG['remark_fittings'] = '(Aksesori)';
$_LANG['remark_gift'] = '(Hadiah)';
$_LANG['remark_favourable'] = '(Penawaran Spesial)';
$_LANG['remark_package'] = '(Paket hadiah)';

/* 订单来源统计 */
$_LANG['from_order'] = 'Sumber pesanan:';
$_LANG['from_ad_js'] = 'Iklan:';
$_LANG['from_goods_js'] = 'JS di luar situs';
$_LANG['from_self_site'] = 'Dari situs ini';
$_LANG['from'] = 'Dari situs:';

/* 添加、编辑订单 */
$_LANG['add_order'] = 'Tambahkan pesanan';
$_LANG['edit_order'] = 'Edit pesanan';
$_LANG['step']['user'] = 'Silakan pilih anggota yang Anda inginkan untuk melakukan pemesanan';
$_LANG['step']['goods'] = 'Pilih produk';
$_LANG['step']['consignee'] = 'Siapkan informasi penerima';
$_LANG['step']['shipping'] = 'Pilih metode pengiriman';
$_LANG['step']['payment'] = 'Pilih metode pembayaran';
$_LANG['step']['other'] = 'Tetapkan informasi lain';
$_LANG['step']['money'] = 'Biaya pemasangan';
$_LANG['anonymous'] = 'Pengguna anonim';
$_LANG['by_useridname'] = 'Cari berdasarkan nomor anggota atau nama anggota';
$_LANG['button_prev'] = 'Langkah sebelumnya';
$_LANG['button_next'] = 'Langkah selanjutnya';
$_LANG['button_finish'] = 'Lengkap';
$_LANG['button_cancel'] = 'Batalkan';
$_LANG['name'] = 'Nama';
$_LANG['desc'] = 'Deskripsi';
$_LANG['shipping_fee'] = 'Biaya Pengiriman';
$_LANG['free_money'] = 'Kuota gratis';
$_LANG['insure'] = 'Biaya asuransi';
$_LANG['pay_fee'] = 'Biaya penanganan';
$_LANG['pack_fee'] = 'Biaya pengepakan';
$_LANG['card_fee'] = 'Biaya Tambahan';
$_LANG['no_pack'] = 'Jangan berkemas';
$_LANG['no_card'] = 'Tidak ada kartu ucapan';
$_LANG['add_to_order'] = 'Tambahkan pesanan';
$_LANG['calc_order_amount'] = 'Hitung jumlah pesanan';
$_LANG['available_surplus'] = 'Saldo yang tersedia:';
$_LANG['available_integral'] = 'Poin yang tersedia:';
$_LANG['available_bonus'] = 'kupon yang tersedia:';
$_LANG['admin'] = 'Admin tambahkan';
$_LANG['search_goods'] = 'Cari berdasarkan nomor produk atau nama produk atau nomor produk';
$_LANG['category'] = 'Kategori';
$_LANG['brand'] = 'Merek';
$_LANG['user_money_not_enough'] = 'Saldo pengguna tidak mencukupi';
$_LANG['pay_points_not_enough'] = 'Poin pengguna tidak mencukupi';
$_LANG['money_paid_enough'] = 'Total yang dibayarkan melebihi dari total produk';
$_LANG['price_note'] = 'Catatan: Markup atribut sudah termasuk dalam harga produk';
$_LANG['select_pack'] = 'Pilih kemasan';
$_LANG['select_card'] = 'Pilih kartu ucapan';
$_LANG['select_shipping'] = 'Silakan pilih metode pengiriman terlebih dahulu';
$_LANG['want_insure'] = 'Saya ingin memastikan';
$_LANG['update_goods'] = 'Perbarui produk';
$_LANG['notice_user'] = '<strong>Catatan:</strong>Hasil pencarian hanya menampilkan 20 catatan pertama, jika tidak ada fase yang ditemukan' .
        'Ya, tolong cari lebih akurat. Selain itu, jika anggota terdaftar dari forum dan belum masuk di mal,' .
        'Tidak dapat menemukannya, Anda harus masuk terlebih dahulu di mal.';
$_LANG['amount_increase'] = 'Total pesanan Anda telah bertambah, dikarenakan perubahan sistem pesanan Anda harus melewati proses pembayaran terlebih dahulu';
$_LANG['amount_decrease'] = 'Total pesanan Anda telah berkurang, dikarenakan perubahan sistem pesanan Anda harus melakukan pengembalian dana';
$_LANG['continue_shipping'] = 'Metode pengiriman asli tidak lagi tersedia karena Anda telah mengubah wilayah penerima. Silakan pilih metode pengiriman baru.';
$_LANG['continue_payment'] = 'Metode pembayaran asli tidak lagi tersedia karena Anda memodifikasi metode pengiriman. Silakan pilih metode pengiriman baru';
$_LANG['refund'] = 'Pengembalian dana';
$_LANG['cannot_edit_order_shipped'] = 'Anda tidak dapat mengubah pesanan yang dikirim';
$_LANG['address_list'] = 'Pilih dari alamat pengiriman yang ada:';
$_LANG['order_amount_change'] = 'Total Pesanan berubah dari %s ke %s';
$_LANG['shipping_note'] = 'Catatan: Karena pesanan telah dikirim, memodifikasi metode pengiriman tidak akan mengubah biaya pengiriman dan premi asuransi.';
$_LANG['change_use_surplus'] = 'Edit pesanan %s untuk mengubah total yang dibayarkan dengan prabayar';
$_LANG['change_use_integral'] = 'Edit pesanan %s untuk mengubah total yang dibayarkan dengan poin';
$_LANG['return_order_surplus'] = 'Pembayaran di muka digunakan untuk mengembalikan pesanan %s karena pembatalan, pembatalan, atau pengembalian';
$_LANG['return_order_integral'] = 'Kredit yang digunakan untuk membayar pesanan %s karena pembatalan, pembatalan, atau pengembalian';
$_LANG['order_gift_integral'] = 'Poin dari pesanan %s';
$_LANG['return_order_gift_integral'] = 'Kredit dikembalikan untuk pesanan %s karena pengembalian atau proses tidak dikirim';
$_LANG['invoice_no_mall'] = '& nbs';

$_LANG['js_languages']['input_price'] = 'Harga khusus';
$_LANG['js_languages']['pls_search_user'] = 'Silakan cari dan pilih anggota';
$_LANG['js_languages']['confirm_drop'] = 'Anda yakin ingin menghapus produk ini?';
$_LANG['js_languages']['invalid_goods_number'] = 'Jumlah item salah';
$_LANG['js_languages']['pls_search_goods'] = 'Silakan cari dan pilih produk';
$_LANG['js_languages']['pls_select_area'] = 'Silakan pilih area Anda';
$_LANG['js_languages']['pls_select_shipping'] = 'Silakan pilih metode pengiriman';
$_LANG['js_languages']['pls_select_payment'] = 'Silakan pilih metode pembayaran';
$_LANG['js_languages']['pls_select_pack'] = 'Silakan pilih kemasannya';
$_LANG['js_languages']['pls_select_card'] = 'Silakan pilih kartu ucapan';
$_LANG['js_languages']['pls_input_note'] = 'Silakan isi keterangannya!';
$_LANG['js_languages']['pls_input_cancel'] = 'Silakan isi alasan pembatalan!';
$_LANG['js_languages']['pls_select_refund'] = 'Silakan pilih metode pengembalian dana!';
$_LANG['js_languages']['pls_select_agency'] = 'Silakan pilih kantor!';
$_LANG['js_languages']['pls_select_other_agency'] = 'Pesanan milik kantor ini sekarang, silakan pilih kantor lain!';
$_LANG['js_languages']['loading'] = 'Memuat ...';

/* 订单操作 */
$_LANG['order_operate'] = 'Proses Pemesanan:';
$_LANG['label_refund_amount'] = 'Jumlah pengembalian dana:';
$_LANG['label_handle_refund'] = 'Metode pengembalian uang:';
$_LANG['label_refund_note'] = 'Deskripsi pengembalian dana:';
$_LANG['return_user_money'] = 'Kembalikan saldo pengguna';
$_LANG['create_user_account'] = 'Buat permintaan pengembalian dana';
$_LANG['not_handle'] = 'Perhatian, silahkan pilih proses saat ini';

$_LANG['order_refund'] = 'Pengembalian uang pesanan: %s';
$_LANG['order_pay'] = 'Pembayaran pesanan: %s';

$_LANG['send_mail_fail'] = 'Gagal mengirim email';

$_LANG['send_message'] = 'Kirim / Lihat Pesan';

/* 发货单操作 */
$_LANG['delivery_operate'] = 'Proses Faktur:';
$_LANG['delivery_sn_number'] = 'Nomor Faktur:';
$_LANG['invoice_no_sms'] = 'Silakan isi nomor faktur!';

/* 发货单搜索 */
$_LANG['delivery_sn'] = 'Faktur';

/* 发货单状态 */
$_LANG['delivery_status'][0] = 'Dikirim';
$_LANG['delivery_status'][1] = 'Kembali';
$_LANG['delivery_status'][2] = 'Normal';

/* 发货单标签 */
$_LANG['label_delivery_status'] = 'Status faktur';
$_LANG['label_suppliers_name'] = 'Pemasok';
$_LANG['label_delivery_time'] = 'Bangun waktu';
$_LANG['label_delivery_sn'] = 'Nomor Faktur';
$_LANG['label_add_time'] = 'Waktu pemesanan';
$_LANG['label_update_time'] = 'Waktu pengiriman';
$_LANG['label_send_number'] = 'Jumlah pengiriman';

/* 发货单提示 */
$_LANG['tips_delivery_del'] = 'Catatan pengiriman berhasil dihapus!';

/* 退货单操作 */
$_LANG['back_operate'] = 'Proses Pengembalian Pesanan:';

/* 退货单标签 */
$_LANG['return_time'] = 'Waktu kembali:';
$_LANG['label_return_time'] = 'Waktu kembali';

/* 退货单提示 */
$_LANG['tips_back_del'] = 'Pesanan pengembalian berhasil dihapus!';

$_LANG['goods_num_err'] = 'Stok tidak mencukupi, silakan pilih lagi!';

/* 退换货订单状态 */
$_LANG['bos'][0] = "Disetujui </br> </br> Menunggu pengguna untuk mengembalikan produk di jalan";
$_LANG['bos'][1] = "Menerima barang dari pengguna";
$_LANG['bos'][2] = "Barang yang dikembalikan telah dikirim";
$_LANG['bos'][3] = "Pengembalian total / pengerjaan ulang";
$_LANG['bos'][4] = "Pengembalian dana (tidak diperlukan pengembalian)";
$_LANG['bos'][5] = "Aplikasi sedang ditinjau";
$_LANG['bos'][6] = "Aplikasi ditolak";
$_LANG['bos'][7] = "Barang yang dikembalikan terlambat dan aplikasi dibatalkan secara otomatis";
$_LANG['bos'][8] = "Pengguna membatalkan aplikasi";

/* 退换货订单退款状态 */
$_LANG['bps'][0] = "Tidak dikembalikan";
$_LANG['bps'][1] = "Dikembalikan";
$_LANG['bps'][9] = "Tidak diperlukan pengembalian uang";
?>
