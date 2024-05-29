<?php

namespace App\Models;



class Post
{
    // use HasFactory;

    private static $blog_posts = [
        [
            "divisi" => "Data Entry",
            "slug" => "data-entry",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum natus pariatur totam ex. Recusandae dolorum tempore, fugit perferendis mollitia earum esse necessitatibus alias debitis beatae deserunt, nulla natus quae, nemo praesentium dignissimos in commodi ducimus accusantium ut temporibus consectetur repellendus soluta! Qui, vitae exercitationem sequi consectetur quia tenetur. Delectus, laboriosam."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}

// Post::create([
//     'divisi'=> 'Data Entry',
//     'slug'=>'data-entry',
//     'excerpt'=>'Deskripsi Pekerjaan:<br>Kami sedang mencari individu yang teliti dan memiliki keterampilan untuk bergabung dengan tim kami sebagai Data Entry. Kandidat ideal akan bertanggung jawab untuk memasukkan data secara akurat dan efisien ke dalam sistem kami, serta memastikan kualitas dan integritas data.',
//     'body'=>'Deskripsi Pekerjaan:<br>Kami sedang mencari individu yang teliti dan memiliki keterampilan untuk bergabung dengan tim kami sebagai Data Entry. Kandidat ideal akan bertanggung jawab untuk memasukkan data secara akurat dan efisien ke dalam sistem kami, serta memastikan kualitas dan integritas data.<br><br>Tanggung Jawab:<br>Memasukkan data secara akurat ke dalam sistem komputer atau basis data.<br>Memastikan semua data yang dimasukkan adalah benar dan up-to-date.<br>Melakukan verifikasi dan pengecekan ulang data yang telah dimasukkan.<br>Mengelola dan mengorganisir file serta dokumen.<br>Melaporkan setiap ketidaksesuaian data kepada manajer atau supervisor.<br>Mematuhi prosedur dan standar yang telah ditetapkan oleh perusahaan.<br>Menjaga kerahasiaan informasi perusahaan dan data pelanggan.<br><br>Kualifikasi:<br>Pendidikan minimal SMA/SMK atau setara.<br>Pengalaman kerja sebagai data entry atau posisi administratif lainnya merupakan nilai tambah.<br>Kemampuan mengetik cepat dan akurat.<br>Keterampilan komputer yang baik, termasuk pemahaman tentang Microsoft Office (Word, Excel, dll.) dan perangkat lunak basis data.<br>Kemampuan untuk bekerja di bawah tekanan dan memenuhi tenggat waktu.<br>Keterampilan komunikasi yang baik, baik lisan maupun tulisan.<br>Perhatian terhadap detail dan kemampuan untuk melakukan tugas-tugas yang monoton dengan tingkat akurasi yang tinggi.']);
