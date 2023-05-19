<?php

return [
    'ad'				        => 'Direktori Berkas',
    'ad_domain'				    => 'Domain Direktori Aktif',
    'ad_domain_help'			=> 'Terkadang ini sama dengan domain email anda, tapi tidak selalu.',
    'ad_append_domain_label'    => 'Tambahkan nama domain',
    'ad_append_domain'          => 'Sisipkan nama domain pada baris nama pengguna',
    'ad_append_domain_help'     => 'Pengguna tidak diperlukan untuk menulis"namapengguna@domail.lokal", mereka dapat hanya menuliskan "namapengguna".',
    'admin_cc_email'            => 'Tembusan Email',
    'admin_cc_email_help'       => 'Jika Anda ingin mengirim salinan email checkin / checkout yang dikirimkan ke pengguna akun email tambahan, masukkan di sini. Jika tidak, biarkan bidang ini kosong.',
    'is_ad'				        => 'Ini adalah server aktif direktori',
    'alerts'                	=> 'Alerts',
    'alert_title'               => 'Update Notification Settings',
    'alert_email'				=> 'Kirim peringatan kepada',
    'alert_email_help'    => 'Email addresses or distribution lists you want alerts to be sent to, comma separated',
    'alerts_enabled'			=> 'Peringatan Email Diaktifkan',
    'alert_interval'			=> 'Ambang batas waktu kadaluwarsa (dalam beberapa hari)',
    'alert_inv_threshold'		=> 'Ambang Batas Invertaris',
    'allow_user_skin'           => 'Izinkan skin pengguna',
    'allow_user_skin_help_text' => 'Mencentang kotak ini akan mengizinkan seorang pengguna untuk menimpa skin UI dengan sesuatu yang berbeda.',
    'asset_ids'					=> 'ID Aset',
    'audit_interval'            => 'Memeriksa perbedaan',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date will be updated.',
    'audit_warning_days'        => 'Ambang Peringatan Audit',
    'audit_warning_days_help'   => 'Berapa hari sebelum kami harus memperingatkan aset yang akan dilelang?',
    'auto_increment_assets'		=> 'Generate auto-incrementing asset tags',
    'auto_increment_prefix'		=> 'Awalan (opsional)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'					=> 'Cadangkan',
    'backups_help'              => 'Create, download, and restore backups ',
    'backups_restoring'         => 'Restoring from Backup',
    'backups_upload'            => 'Upload Backup',
    'backups_path'              => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings'			=> 'Pengaturan Kode batang',
    'confirm_purge'			    => 'Konfirmasi Pembersihan',
    'confirm_purge_help'		=> 'Masukkan teks "DELETE" di dalam kotak dibawah untuk menghapus total rekaman yang telah dihapus. Tindakan ini tidak dapat dikembalikan dan akan menghapus sermua item dan pengguna yang terhapus-lunak secara PERMANEN. (Anda garus membuat sebuah cadangan terlebih dahulu, untuk berjaga-jaga.)',
    'custom_css'				=> 'Kustom CSS',
    'custom_css_help'			=> 'Masukkan setiap penimpaan CSS ubah sesuai yang ingin anda gunakan jangan sertakan&lt;gaya&lt;/gaya&gt;tag.',
    'custom_forgot_pass_url'	=> 'Atur Ulang Kata Sandi URL tempahan',
    'custom_forgot_pass_url_help'	=> 'Ini menggantikan URL lupa sandi bawaan dilayar masuk, berguna untuk mengarahkan orang ke fungsi penyetelan ulang kata sandi bawaan internal atau yang dihost. Ini akan secara efektif menonaktifkan pengguna lupa fungsi kata sandi.',
    'dashboard_message'			=> 'Pesan Beranda',
    'dashboard_message_help'	=> 'Tulisan ini akan muncul di beranda bagi siapa saja yang memiliki izin untuk melihat beranda.',
    'default_currency'  		=> 'Mata Uang bawaan',
    'default_eula_text'			=> 'EULA bawaan',
    'default_language'			=> 'Bahasa Dasar',
    'default_eula_help_text'	=> 'Anda juga dapat mengaitkan EULA kastom dengan kategori aset tertentu.',
    'display_asset_name'        => 'Tampilan nama aset',
    'display_checkout_date'     => 'Tampilan tanggal keluar',
    'display_eol'               => 'Tampilkan EOL dalam tampilan tabel',
    'display_qr'                => 'Kode Tampilan Persegi',
    'display_alt_barcode'		=> 'Tampilkan kode batang 1D',
    'email_logo'                => 'Logo Email',
    'barcode_type'				=> 'Tipe Kode Batang 2D',
    'alt_barcode_type'			=> 'Tipe Kode Batang 1D',
    'email_logo_size'       => 'Logo berbentuk kotak terlihat bagus pada email. ',
    'enabled'                   => 'Enabled',
    'eula_settings'				=> 'Pengaturan EULA',
    'eula_markdown'				=> 'EULA ini memungkinkan <a href="https://help.github.com/articles/github-flavored-markdown/">Github merasakan penurunan harga</a>.',
    'favicon'                   => 'Ikonfavorit',
    'favicon_format'            => 'Jenis berkas yang diterima adalah ico, png, dan gif. Format gambar lainnya mungkin tidak bekerja di semua peramban web.',
    'favicon_size'          => 'Ikonfavorit harus berupa gambar berbentuk kotak. 16x16 piksel.',
    'footer_text'               => 'Teks Footer Tambahan ',
    'footer_text_help'          => 'Teks ini akan muncul di footer sisi kanan. Tautan diizinkan menggunakan <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Jeda, tajuk, gambar, dll bisa mengakibatkan hasil yang tidak dapat diprediksi.',
    'general_settings'			=> 'Pengaturan Umum',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula,  tos, dashboard, privacy',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'			=> 'Membuat Cadangan',
    'header_color'              => 'Warna Header',
    'info'                      => 'Penggaturan ini memungkinkan anda menyesuaikan aspek-aspek tertentu dari instalasi anda.',
    'label_logo'                => 'Logo Label',
    'label_logo_size'           => 'Logo berbentuk kotak terlihat bagus - akan ditampilkan pada bagian kanan atas dari setiap label aset. ',
    'laravel'                   => 'Versi Laravel',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Default Permissions Group',
    'ldap_default_group_info'   => 'Select a group to assign to newly synced users. Remember that a user takes on the permissions of the group they are assigned.',
    'no_default_group'          => 'No Default Group',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client TLS Key',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'Aktifkan LDAP',
    'ldap_integration'          => 'Integrasi LDAP',
    'ldap_settings'             => 'Pengaturan LDAP',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
     'ldap_client_tls_key'       => 'LDAP Client-Side TLS key',
    'ldap_login_test_help'      => 'Masukkan nama pengguna dan kata sandi LDAP yang sah dari DN dasar yang anda tentukan di atas untuk menguji apakah proses masuk LDAP anda dikonfigurasi dengan benar. ANDA HARUS MENYIMPAN PENGATURAN LDAP YANG ANDA PERBARUI PERTAMA.',
    'ldap_login_sync_help'      => 'Ini hanya tes yang bisa dilacak LDAP dengan benar. Jika pengesahan LDAP anda tidak benar, pengguna mungkin masih belum dapat masuk. ANDA HARUS MENYIMPAN PENGATURAN LDAP YANG ANDA PERBARUI PERTAMA.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'Server LDAP',
    'ldap_server_help'          => 'Ini harus dimulai dengan ldap:// (for unencrypted or TLS) or ldaps:// (for SSL)',
    'ldap_server_cert'			=> 'Validasi sertifikat SSL LDAP',
    'ldap_server_cert_ignore'	=> 'Izinkan Sertifikat SSL yang tidak sah',
    'ldap_server_cert_help'		=> 'Pilih kotak centang ini jika anda menggunakan sertifikat SSL yang masuk sendiri dan ingin menerima sertifikat SSL yang tidak sah.',
    'ldap_tls'                  => 'Gunakan TLS',
    'ldap_tls_help'             => 'Ini harus diperiksa hanya jika anda menjalankan STARTTLS di server LDAP anda. ',
    'ldap_uname'                => 'LDAP Bind nama pengguna',
    'ldap_dept'                 => 'Departemen LDAP',
    'ldap_phone'                => 'Nomor Telepon LDAP',
    'ldap_jobtitle'             => 'Nama Jabatan LDAP',
    'ldap_country'              => 'Negara LDAP',
    'ldap_pword'                => 'LDAP Bind sandi',
    'ldap_basedn'               => 'Mengikat Dasar DN',
    'ldap_filter'               => 'Saring LDAP',
    'ldap_pw_sync'              => 'Sinkronisasi kata sandi LDAP',
    'ldap_pw_sync_help'         => 'Hapus centang pada kotak ini jika anda tidak ingin menyimpan kata sandi LDAP yang disinkronkan dengan kata sandi lokal. Menonaktifkan ini berarti pengguna anda tidak dapat masuk jika server LDAP anda tidak dapat dijangkau karena alasan tertentu.',
    'ldap_username_field'       => 'Bidang Nama Pengguna',
    'ldap_lname_field'          => 'Nama Terakhir',
    'ldap_fname_field'          => 'Nama Depan LDAP',
    'ldap_auth_filter_query'    => 'Permintaan otentikasi LDAP',
    'ldap_version'              => 'Versi LDAP',
    'ldap_active_flag'          => 'Bendera Aktif LDAP',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_emp_num'              => 'Nomor Karyawan LDAP',
    'ldap_email'                => 'Email LDAP',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synchronization',
    'license'                   => 'Lisensi perangkat lunak',
    'load_remote_text'          => 'Skrip Jarak Jauh',
    'load_remote_help_text'		=> 'Instalasi Snipe-IT ini bisa membuat skrip dari dunia luar.',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'IP Address',
    'login_success'             => 'Success?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => 'Catatan Masuk',
    'login_note_help'           => 'Opsional memasukkan beberapa kalimat di layar masuk anda, misalnya membantu orang-orang yang telah menemukan perangkat yang hilang atau dicuri. Bidang ini menerima <a href="https://help.github.com/articles/github-flavored-markdown/">Rasa penurunan Github</a>',
    'login_remote_user_text'    => 'Opsi masuk untuk Pengguna Jarak Jauh',
    'login_remote_user_enabled_text' => 'Aktifkan Login dengan Remote User Header',
    'login_remote_user_enabled_help' => 'Opsi ini memungkinkan Otentikasi melalui header REMOTE_USER sesuai dengan "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Nonaktifkan mekanisme autentikasi lainnya',
    'login_common_disabled_help' => 'Opsi ini menonaktifkan mekanisme otentikasi lainnya. Cukup aktifkan opsi ini jika Anda yakin bahwa login REMOTE_USER Anda sudah berfungsi',
    'login_remote_user_custom_logout_url_text' => 'Penyesuaian URL logout',
    'login_remote_user_custom_logout_url_help' => 'Jika diisi, pengguna akan dialihkan ke URL ini setelah keluar atau logout. Berfungsi untuk menutup sesi pengguna dengan sempurna.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Logo',
    'logo_print_assets'         => 'Gunakan saat mencetak',
    'logo_print_assets_help'    => 'Menggunakan branding Anda pada semua hasil cetak daftar aset ',
    'full_multiple_companies_support_help_text' => 'Membatasi pengguna (termasuk admin) yang ditugaskan ke perusahaan untuk aset perusahaan mereka.',
    'full_multiple_companies_support_text' => 'Dukungan Banyak Perusahaan',
    'show_in_model_list'   => 'Tunjukkan di Model dalam urutan ke bawah',
    'optional'					=> 'pilihan',
    'per_page'                  => 'Hasil Per Halaman',
    'php'                       => 'Versi PHP',
    'php_info'                  => 'PHP Info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Anda harus menginstall php-gd untuk menampilkan kode QR, lihat petunjuk pemasangan.',
    'php_gd_warning'            => 'Pengolahan gambar PHP dan plugin GD TIDAK terpasang.',
    'pwd_secure_complexity'     => 'Kompleksitas Kata Sandi',
    'pwd_secure_complexity_help' => 'Pilih aturan kerumitan kompleksitas yang ingin anda tegakkan.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => 'Karakter Minimal Kata Sandi',
    'pwd_secure_min_help'       => 'Minimum permitted value is 8',
    'pwd_secure_uncommon'       => 'Mencegah kata Sandi Umum',
    'pwd_secure_uncommon_help'  => 'Ini akan melarang pengguna menggunakan kata kunci umum dari 10.000 sandi teratas yang dilaporkan mengalami pelanggaran.',
    'qr_help'                   => 'Aktifkan kode QR terlebih dahulu untuk mengatur ini',
    'qr_text'                   => 'Tulis Kode QR',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML settings',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'saml_download'             => 'Download Metadata',
    'setting'                   => 'Diatur',
    'settings'                  => 'Pengaturan',
    'show_alerts_in_menu'       => 'Tampilkan peringatan di menu atas',
    'show_archived_in_list'     => 'Aset yang di Arsipkan',
    'show_archived_in_list_text'     => 'Tampilkan aset yang di arsipkan dalam daftar "semua aset"',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Tampilkan gambar dalam email',
    'show_images_in_email_help'   => 'Hapus centang kotak ini jika instalasi Snipe-IT Anda berada di belakang VPN atau jaringan tertutup dan pengguna di luar jaringan tidak akan dapat memuat gambar yang disajikan dari instalasi ini di email mereka.',
    'site_name'                 => 'Nama Situs',
    'integrations'               => 'Integrations',
    'slack'                     => 'Slack',
    'general_webhook'           => 'General Webhook',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Test to Save',
    'webhook_title'               => 'Update Webhook Settings',
    'webhook_help'                => 'Integration settings',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Channel',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Settings',
    'webhook_test'                 =>'Test :app integration',
    'webhook_integration_help'    => ':app integration is optional, however the endpoint and channel are required if you wish to use it. To configure :app integration, you must first <a href=":webhook_link" target="_new" rel="noopener">create an incoming webhook</a> on your :app account. Click on the <strong>Test :app Integration</strong> button to confirm your settings are correct before saving. ',
    'webhook_integration_help_button'    => 'Once you have saved your :app information, a test button will appear.',
    'webhook_test_help'           => 'Test whether your :app integration is configured correctly. YOU MUST SAVE YOUR UPDATED :app SETTINGS FIRST.',
    'snipe_version'  			=> 'Versi Snipe-IT',
    'support_footer'            => 'Link footer pendukung ',
    'support_footer_help'       => 'Tentukan siapa yang melihat tautan ke informasi pendukung dan panduan pengguna Snipe-IT',
    'version_footer'            => 'Versi pada Footer ',
    'version_footer_help'       => 'Tentukan siapa saja yang dapat melihat versi dan build number dari Snipe-IT.',
    'system'                    => 'Informasi Sistem',
    'update'                    => 'Perbarui Setelan',
    'value'                     => 'Jumlah',
    'brand'                     => 'Bermerek',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, Site Name',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Tentang Pengaturan',
    'about_settings_text'       => 'Pengaturan ini memungkinkan anda menyesuaikan aspek-aspek tertentu dari instalasi anda.',
    'labels_per_page'           => 'Label per halaman',
    'label_dimensions'          => 'Dimensi label (inci)',
    'next_auto_tag_base'        => 'Berikut auto-kenaikan',
    'page_padding'              => 'Margin halaman (inci)',
    'privacy_policy_link'       => 'Tautan ke Kebijakan Privasi',
    'privacy_policy'            => 'Kebijakan Privasi',
    'privacy_policy_link_help'  => 'Jika url disertakan di sini, tautan ke kebijakan privasi Anda akan dimasukkan dalam footer aplikasi dan di email apa pun yang dikirimkan sistem, sesuai dengan GDPR. ',
    'purge'                     => 'Bersihkan Arsip yang Dihapus',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => 'Beri label saluran bawah',
    'labels_display_sgutter'    => 'Beri label sisi saluran',
    'labels_fontsize'           => 'Beri label ukuran huruf',
    'labels_pagewidth'          => 'Lebar lembar label',
    'labels_pageheight'         => 'Tinggi lembar label',
    'label_gutters'        => 'Jarak label (inci)',
    'page_dimensions'        => 'Dimensi label (inci)',
    'label_fields'          => 'Bidang label yang terlihat',
    'inches'        => 'inci',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'Tautan ke Snipe-IT di Email',
    'show_url_in_emails_help_text'      => 'Hapus centang pada kotak ini jika anda tidak ingin menautkan kembali ke instalasi Snipe-IT di email anda. Berguna jika sebagian besar pengguna anda tidak pernah masuk. ',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Tinggi maks gambar saluran',
    'thumbnail_max_h_help'   => 'Tinggi maksimum piksel yang dapat ditampilkan gambar saluran dalam tampilan daftar. Min 25, maks 500.',
    'two_factor'        => 'Dua Faktor Otentikasi',
    'two_factor_secret'        => 'Kode Dua Faktor',
    'two_factor_enrollment'        => 'Pendaftaran Dua Faktor',
    'two_factor_enabled_text'        => 'Aktifkan Dua Faktor',
    'two_factor_reset'        => 'Atur Ulang Dua Faktor Rahasia',
    'two_factor_reset_help'        => 'Ini akan memaksa pengguna untuk mendaftarkan perangkat mereka dengan Google Authenticator lagi. Ini bisa berguna jika perangkat mereka saat ini terdaftar hilang atau dicuri. ',
    'two_factor_reset_success'          => 'Dua perangkat faktor berhasil di-reset',
    'two_factor_reset_error'          => 'Dua faktor perangkat gagal direset',
    'two_factor_enabled_warning'        => 'Mengaktifkan dua faktor jika saat ini tidak diaktifkan dan akan segera memaksa anda untuk melakukan otentikasi dengan perangkat yang terdaftar di Google Auth. Anda juga akan memiliki kemampuan untuk mendaftarkan perangkat anda jika seseorang belum terdaftar.',
    'two_factor_enabled_help'        => 'Ini akan mengaktifkan autentikasi dua langkah menggunakan Google Authenticator.',
    'two_factor_optional'        => 'Selektif (pengguna dapat mengaktifkan atau menonaktifkan jika diizinkan)',
    'two_factor_required'        => 'Diperlukan untuk semua pengguna',
    'two_factor_disabled'        => 'Dinonaktifkan',
    'two_factor_enter_code'	=> 'Masukkan Kode Dua Faktor',
    'two_factor_config_complete'	=> 'Kirim Kode',
    'two_factor_enabled_edit_not_allowed' => 'Administrator anda tidak mengizinkan anda untuk mengedit pengaturan ini.',
    'two_factor_enrollment_text'	=> "Diperlukan dua faktor otentikasi, namun perangkat anda belum terdaftar. Buka aplikasi Google Authenticator anda dan pindai kode QR dibawah ini untuk mendaftarkan perangkat anda. Setelah perangkat anda terdaftar, masukkan kode dibawah ini",
    'require_accept_signature'      => 'Membutuhkan Tanda Tangan',
    'require_accept_signature_help_text'      => 'Mengaktifkan fitur ini akan mengharuskan pengguna secara fisik menandatangani untuk menerima aset.',
    'left'        => 'kiri',
    'right'        => 'kanan',
    'top'        => 'atas',
    'bottom'        => 'bawah',
    'vertical'        => 'tegak lurus',
    'horizontal'        => 'mendatar',
    'unique_serial'                => 'Nomor seri unik',
    'unique_serial_help_text'                => 'Menandai boks ini akan membuat adanya batasan keunikan pada tiap nomor seri aset',
    'zerofill_count'        => 'Panjang tag aset, termasuk isian kosong',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
    'oauth_title' => 'OAuth API Settings',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint Settings',
    'asset_tag_title' => 'Update Asset Tag Settings',
    'barcode_title' => 'Update Barcode Settings',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Barcode &amp; QR settings',
    'barcodes_help' => 'This will attempt to delete cached barcodes. This would typically only be used if your barcode settings have changed, or if your Snipe-IT URL has changed. Barcodes will be re-generated when accessed next.',
    'barcodes_spinner' => 'Attempting to delete files...',
    'barcode_delete_cache' => 'Delete Barcode Cache',
    'branding_title' => 'Update Branding Settings',
    'general_title' => 'Update General Settings',
    'mail_test' => 'Send Test',
    'mail_test_help' => 'This will attempt to send a test mail to :replyto.',
    'filter_by_keyword' => 'Filter by setting keyword',
    'security' => 'Security',
    'security_title' => 'Update Security Settings',
    'security_keywords' => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    'security_help' => 'Two-factor, Password Restrictions',
    'groups_keywords' => 'permissions, permission groups, authorization',
    'groups_help' => 'Account permission groups',
    'localization' => 'Localization',
    'localization_title' => 'Update Localization Settings',
    'localization_keywords' => 'localization, currency, local, locale, time zone, timezone, international, internatinalization, language, languages, translation',
    'localization_help' => 'Language, date display',
    'notifications' => 'Notifications',
    'notifications_help' => 'Email Alerts & Audit Settings',
    'asset_tags_help' => 'Incrementing and prefixes',
    'labels' => 'Labels',
    'labels_title' => 'Update Label Settings',
    'labels_help' => 'Label sizes &amp; settings',
    'purge' => 'Purge',
    'purge_keywords' => 'permanently delete',
    'purge_help' => 'Purge Deleted Records',
    'ldap_extension_warning' => 'It does not look like the LDAP extension is installed or enabled on this server. You can still save your settings, but you will need to enable the LDAP extension for PHP before LDAP syncing or login will work.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Employee Number',
    'create_admin_user' => 'Create a User ::',
    'create_admin_success' => 'Success! Your admin user has been added!',
    'create_admin_redirect' => 'Click here to go to your app login!',
    'setup_migrations' => 'Database Migrations ::',
    'setup_no_migrations' => 'There was nothing to migrate. Your database tables were already set up!',
    'setup_successful_migrations' => 'Your database tables have been created',
    'setup_migration_output' => 'Migration output:',
    'setup_migration_create_user' => 'Next: Create User',
    'ldap_settings_link' => 'LDAP Settings Page',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integration',
];
