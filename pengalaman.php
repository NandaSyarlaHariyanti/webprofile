<div class="halaman">

    <?php 
        $pengalaman = array (
                        array ('kegiatan' => "PEMABA 2022", 'divisi' => "Senior Pendamping", 'jobdesk1' => "Membantu mahasiswa baru beradaptasi dengan linkungan kampus", 'jobdesk2' => "Membantu mahasiswa baru untuk mengenal sumberdaya kampus"),
                        array ('kegiatan' => "PEMIRA 2023", 'divisi' => "Humas", 'jobdesk1' => "Mengelola sosial media sebagai media promosi", 'jobdesk2' => "Menjalin hubungan baik dengan sponsor"),
                        array ('kegiatan' => "Internship CV Rumah Mesin", 'divisi' => "Digital Marketing", 'jobdesk1' => "Membuat dan mengelola konten digital", 'jobdesk2' => "Menerapkan optimasi SEO")

        ); 
    
    
        foreach ($pengalaman as $data) :
            echo "<h3>" . $data ['kegiatan'] . " - " . $data ['divisi'] . "</h3>";
            echo "<li>" . $data ['jobdesk1'] . "</li>" ;
            echo "<li>" . $data ['jobdesk2'] . "</li>" ;
        
        endforeach;
    ?>
        
                       
</div>