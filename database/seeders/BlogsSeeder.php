<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create(['name' => "Google, Android\'in WhatsApp kullanıcılarını şüpheye düşüren büyük sorununu nihayet çözdü",  "summary" => "Google, Android kullanıcılarını şüpheye düşüren \"WhatsApp izinsiz mikrofon bildirimleri\" sorununu nihayet çözdüğünü duyurdu.",  "photo" => "FxqE9u2fbbFxqE9u2fbb1-4-oI0I.jpg", "content" => "Eğer bu hatayı daha önce duymadıysanız kısaca özetleyelim: Nisan ayı başlarında bazı kullanıcılar, yazılımın cihazlarının mikrofonunu izinleri olmadan kullandığını fark etmeye ve çevrimiçi olarak bildirmeye başladı. Bu sorun, 6 Mayıs’ta Twitter mühendisi Foad Dabiri’nin WhatsApp’ın Pixel 7 Pro’daki mikrofona bir sabah en az dokuz kez eriştiğini fark etmesiyle doruk noktasına ulaştı. Hata her oluştuğunda, ona konu hakkında bir bildirim geldi."]);
        Blog::create(['name' => "ABD’de Yüksek Mahkeme, Coinbase’i Haklı Buldu",  'summary' => "ABD’de yüksek mahkeme, Coinbase‘in müşteriler ile olan davalarının durdurulması talebini kabul etti.",  'photo' => 'iDiiq1rZDoiDiiq1rZDo0alId5Z6_300x300.jpg', "content" => "ABD\'’'de yüksek mahkeme, kripto para borsası Coinbasein müşteriler ile olan davalarının durdurulması talebini kabul etti. Hakimlerin 5\'i Coinbase\'i haklı bulurken, 4 üye karşı oy kullandı. Mahkeme, davanın tahkime gönderilmesine ilişkin temyiz başvurusunun bekletilmesine karar verdi. Böylece Coinbase, davalar mahkemelerden çıkarılıp özel temyizlere taşınabilecek."]);
        Blog::create(['name' => 'Netflix Temmuz 2023 programı açıklandı! İşte yeni sezon dizi ve filmler',  'summary' => "Netflix Temmuz ayı programı açıklandı. 2023 Temmuz\'da Netflix\'te yeni sezon diziler ve filmler izleyici karşısına çıkacak. İşte Netflix\'in Temmuz programı...",  'photo' => 'pJo2DQKAjypJo2DQKAjyrehber.jpg', 'content' => "Esvetin hayatından çıkışı Peyaminin içinde büyük bir acı ve öfkeye neden olur. Dimitri, olanları geride bırakarak Esvetle birlikte olmaya hazırdır. İçinde bulunduğu çaresizlik ve acı ile bambaşka birine dönüşen Peyaminin hayatına giren Cemre bu dönemde onun en büyük dert ortağı olurken, Peyami annesiyle ilgili gerçeklere de adım adım yaklaşmaktadır."]);
        Blog::create(['name' => "İzlanda\'daki Anakonda Buz Mağarası, dev bir yılana benzeyen şekliyle ziyaretçilerini büyülüyor",  'summary' => "İzlanda\'nın en büyük buzulunun yer aldığı Vatnajökull Ulusal Parkı\'nın içinde bulunan sıra dışı bir buz mağarası, içerisinde dev bir \"yılan\" gizliyor.",  'photo' => 'yBezZuzyKdyBezZuzyKdasd.jpg', 'content' => "Buzul mağaraları benzersiz mavi renklerini, buzun sıkışmasıyla oluşan basınçtan elde ediyor. Bu, içindeki tüm havayı dışarı iterek, buzun mavi yerine beyaz görünmesine neden oluyor. Vatnajökull Ulusal Parkı'nda yürüyüşler ve turlar düzenleyen Arctic Adventures, bunun yüzlerce yıl devam eden kar tanelerinin düşmesi, sıkışması ve yeniden kristalleşerek buza dönüşmesi sürecinin bir sonucu olduğunu ve bu sırada buzun içinde sıkışan hava kabarcıklarının dışarı itildiğini söylüyor."]);
        Blog::create(['name' => "NASA, son 30 yılda yükselen deniz seviyelerini gösteren endişe verici bir animasyon yayınladı",  'summary' => "NASA\'nın yayınladığı yeni bir animasyon, 30 yıl içinde insanlığı tehdit eden önemli tehlikenin boyutlarını gözler önüne seriyor.",  'photo' => 'zi4sI0ybmbzi4sI0ybmbasd1.jpg', 'content' => "NASA, son 30 yılda küresel deniz seviyesinin ne kadar yükseldiğini gösteren endişe verici bir animasyon yayınladı. Görselleştirme, su seviyelerindeki yükselişi bir teknenin penceresinden bakıyormuşsunuz ve dalgalar tekneye çarpıyormuş gibi göstererek mükemmel bir şekilde yansıtıyor."]);
        //
    }
}
