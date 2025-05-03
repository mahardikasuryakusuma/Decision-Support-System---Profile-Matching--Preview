<?php

namespace Database\Seeders;

use App\Models\Karyawan as ModelsKaryawan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Karyawan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['nama' => 'RAFI ALMADA', 'no_hp' => '081289376542', 'email' => 'rafi.almada@mail.com'],
            ['nama' => 'TIARA WULANDARI', 'no_hp' => '082134875290', 'email' => 'tiara.wld@mail.com'],
            ['nama' => 'BIMA PRANOTO', 'no_hp' => '085712364580', 'email' => 'bima.prnt@inbox.com'],
            ['nama' => 'NADIA RAHMAWATI', 'no_hp' => '081345789023', 'email' => 'nadia.rahma@mail.net'],
            ['nama' => 'YUSUF HALIM', 'no_hp' => '082178905612', 'email' => 'yusufh92@domain.com'],
            ['nama' => 'LARAS SINTA', 'no_hp' => '081389124785', 'email' => 'laras.sinta@mockmail.com'],
            ['nama' => 'GILANG MAHARDIKA', 'no_hp' => '085678934501', 'email' => 'gilang.md@tempinbox.net'],
            ['nama' => 'INTAN KUSUMA', 'no_hp' => '081266788940', 'email' => 'intan.kusuma@nowhere.com'],
            ['nama' => 'FAJAR PRAMANA', 'no_hp' => '082156734890', 'email' => 'fajar.pramana@mailhouse.com'],
            ['nama' => 'DEWI ANGGRAINI', 'no_hp' => '083167293850', 'email' => 'dewi.anggraini@placeholder.com'],
            ['nama' => 'REZA NUGRAHA', 'no_hp' => '081276539841', 'email' => 'rezan@mail.org'],
            ['nama' => 'SARI MELATI', 'no_hp' => '085623479012', 'email' => 'sari.melati@demo.net'],
            ['nama' => 'ALDI PUTRA', 'no_hp' => '082198345612', 'email' => 'aldi.ptra@anymail.com'],
            ['nama' => 'NIA APRILIANA', 'no_hp' => '081245678390', 'email' => 'nia.april@mail.net'],
            ['nama' => 'DENNY SAPUTRA', 'no_hp' => '085722199034', 'email' => 'dennys@cloudmail.com'],
            ['nama' => 'VINA KARTIKA', 'no_hp' => '082187654321', 'email' => 'vina.ktk@randominbox.org'],
            ['nama' => 'ARIF RAMDANI', 'no_hp' => '081277778901', 'email' => 'arif.ram@tempdomain.com'],
            ['nama' => 'DESI HANDAYANI', 'no_hp' => '083198476530', 'email' => 'desi.handayani@quickmail.cc'],
            ['nama' => 'TOMMY GUNAWAN', 'no_hp' => '085693847562', 'email' => 'tommygn@demoemail.com'],
            ['nama' => 'AMANDA LESTARI', 'no_hp' => '082145670987', 'email' => 'amanda.ls@fakemail.net'],
            ['nama' => 'ZAKI RIDWAN', 'no_hp' => '081367894521', 'email' => 'zaki.ridwan@mailbox.org'],
            ['nama' => 'RINA DAMAYANTI', 'no_hp' => '085634219876', 'email' => 'rina.dama@inboxalias.com'],
            ['nama' => 'DANU MAHESA', 'no_hp' => '082175489321', 'email' => 'danu.m@fakeaddress.com'],
            ['nama' => 'YULIA SARASWATI', 'no_hp' => '081245678934', 'email' => 'yulia.sw@mailtrap.io'],
            ['nama' => 'RANGGA BASKARA', 'no_hp' => '083123478965', 'email' => 'rangga.bsk@mailtemp.com'],
            ['nama' => 'MIRA SALSABILA', 'no_hp' => '082179654321', 'email' => 'mira.sb@virtualmail.com'],
            ['nama' => 'IRWAN FEBRIANTO', 'no_hp' => '081256794312', 'email' => 'irwan.fb@mailfence.com'],
            ['nama' => 'MAYA PUTRI', 'no_hp' => '085712348795', 'email' => 'maya.putri@mockmail.org'],
            ['nama' => 'FAHRI NUGROHO', 'no_hp' => '082112345789', 'email' => 'fahri.ng@emltmp.com'],
            ['nama' => 'SARAH MUNAWAROH', 'no_hp' => '081267893456', 'email' => 'sarah.mw@anonmail.net'],
            ['nama' => 'JORDI ALFANSO', 'no_hp' => '085627894321', 'email' => 'jordi.a@inboxbear.com'],
            ['nama' => 'RACHMAWATI FADILA', 'no_hp' => '083147859620', 'email' => 'rachma.fdl@hiddenmail.com'],
            ['nama' => 'EDO PRATAMA', 'no_hp' => '081233344455', 'email' => 'edo.prtm@tempmail.com'],
            ['nama' => 'FELICIA GISELLE', 'no_hp' => '082199387412', 'email' => 'felicia.gs@mail.io'],
            ['nama' => 'DICKY SANTOSO', 'no_hp' => '085665544332', 'email' => 'dicky.sts@freemail.org'],
            ['nama' => 'NINA SEPTIANI', 'no_hp' => '082177899034', 'email' => 'nina.spt@nomail.com'],
            ['nama' => 'RAYHAN MAULANA', 'no_hp' => '081234556677', 'email' => 'rayhan.ml@fakedomain.net'],
            ['nama' => 'AYU PERTIWI', 'no_hp' => '085698743210', 'email' => 'ayu.prtw@disposablemail.com'],
            ['nama' => 'ALFIAN YUDISTIRA', 'no_hp' => '082156734509', 'email' => 'alfian.yd@trashmail.com'],
        ];

        foreach ($data as $item) {
            ModelsKaryawan::create($item);
        }
    }
}
