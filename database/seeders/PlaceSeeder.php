<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    public function run(): void
    {
        Place::create([
        
            'name' => 'Sri maha bodhi',
            'description' => 'The Sri Maha Bodhi, a sacred fig tree in Anuradhapura, Sri Lanka, is among the most revered religious and historical sites in the world. Planted in 288 BCE, it is believed to be a direct sapling of the original Bodhi tree in Bodh Gaya, India, under which Lord Buddha attained enlightenment. This tree, over 2,300 years old, holds the distinction of being the oldest documented tree in human history.
            Brought to Sri Lanka by Sangamitta Theri, the daughter of Emperor Ashoka, during the reign of King Devanampiya Tissa, the Sri Maha Bodhi symbolizes the deep-rooted connection between Buddhism and Sri Lankan culture. The tree stands in the Mahamevnāwa Gardens, surrounded by protective walls and adorned with offerings of flowers, incense, and lamps by devotees.
            The site attracts pilgrims from across the globe, especially during the Vesak and Poson festivals. It is a focal point for meditation and prayer, embodying peace, wisdom, and spiritual awakening. The Sri Maha Bodhis preservation has been a priority throughout history, with successive rulers and custodians ensuring its survival against natural and human threats. Today, it serves as a timeless symbol of faith, resilience, and the enduring legacy of Buddhism in Sri Lanka.',
            'category' => 'Historical',
            'location' => 'Mahamewuna Garden in historical city of Anuradhapura, Sri Lanka.',
            'district' => 'Anuradhapura',
            'photo' => 'photos/SriMahaBodiyaRanVeta.JPG',
            'suggested_by' => 1,
            'status' => 'accepted',
            'longitude' => 80.4052438047664,
            'latitude' => 8.404135325994845,
        ]);

        Place::create([
        
            'name' => 'Anuradhapura city',
            'description' => 'Anuradhapura, one of Sri Lankas ancient capitals, is a UNESCO World Heritage Site and a cornerstone of the islands history, culture, and religion. Established in the 4th century BCE, it served as the political and religious heart of Sri Lanka for over a millennium. The city is renowned for its well-preserved ruins, which provide a glimpse into a sophisticated civilization that thrived in ancient times.
            Anuradhapura is most famous for its sacred sites, including the Sri Maha Bodhi, a revered tree with a history spanning over 2,300 years. Other iconic landmarks include towering stupas such as Ruwanwelisaya, Jetavanaramaya, and Abhayagiri, which are architectural marvels and significant pilgrimage destinations. The city also features ancient monasteries, reservoirs like the Tissa Wewa, and intricate carvings that highlight advanced engineering and artistic skills.
            The city embodies the essence of Sri Lanka’s Buddhist heritage, attracting pilgrims and history enthusiasts from around the world. Modern Anuradhapura is a blend of ancient glory and rural charm, surrounded by lush greenery and tranquil landscapes. The city remains a symbol of resilience, spirituality, and cultural pride, preserving its legacy as one of the most important historical sites in South Asia.',
            'category' => 'Urban',
            'location' => 'North Central Province',
            'district' => 'Anuradhapura',
            'photo' => 'photos/aerial-view-annuradhapura-ancient-site-sri-lanka-274442052.webp',
            'suggested_by' => 1,
            'status' => 'accepted',
            'longitude' => 80.43545620803403,
            'latitude' => 8.360659475889832,
        ]);

        Place::create([
        
            'name' => 'Ritigala Archeolgical complex',
            'description' => 'Ritigala Archaeological Complex  is a captivating historical and ecological site located in the Anuradhapura District of Sri Lanka. Nestled amidst the Ritigala Mountain, the highest peak in the north-central plains, this ancient monastery holds immense cultural, spiritual, and natural significance.
            Dating back to the 1st century BCE, Ritigala served as a retreat for Buddhist monks practicing meditation and asceticism. The site is renowned for its unique monastic architecture, including stone pathways, meditation platforms, and ponds ingeniously integrated into the natural landscape. Unlike typical monasteries, there are no stupas or statues here, emphasizing its role as a secluded meditation center. 
            Ritigalas mysterious aura is heightened by its association with folklore and mythology. It is believed to be connected to the Ramayana, where Hanuman is said to have dropped a part of the Dronagiri mountain while carrying medicinal herbs to Lanka.
            Surrounded by lush forests rich in biodiversity, Ritigala is also a haven for wildlife and rare medicinal plants. The combination of archaeological ruins, serene surroundings, and mythical allure makes the Ritigala Archaeological Complex a must-visit site for history buffs, nature lovers, and spiritual seekers alike.',
            'category' => 'Archeological',
            'location' => '43 km (27 mi) away from the ancient monastic city of Anuradhapura.',
            'district' => 'Anuradhapura',
            'photo' => 'photos/Ritigala+Ruins-2.jpg',
            'suggested_by' => 2,
            'status' => 'accepted',
            'longitude' => 80.68539518052062,
            'latitude' => 8.197582053117303,
        ]);

        Place::create([
        
            'name' => 'Madukanda Viharaya',
            'description' => 'Madukanda Viharaya is a historic Buddhist temple located in the North Central Province of Sri Lanka, near the town of Vavuniya. Renowned for its religious and historical significance, the temple is believed to date back to ancient times, serving as a resting place for sacred relics during their transportation. According to local legend, the temple was one of the stops where the sacred Tooth Relic of the Buddha was temporarily housed as it made its way to its final destination in Anuradhapura. This connection to the relic adds to the spiritual importance of the site, drawing pilgrims and history enthusiasts alike.
            Architecturally, Madukanda Viharaya reflects traditional Sri Lankan Buddhist temple designs, characterized by its serene ambiance and intricate carvings. The temples stupa, or *dagoba*, is a significant feature, symbolizing the timeless Buddhist philosophy. Surrounding the stupa are other structures such as a shrine room, meditation halls, and living quarters for monks. The temple is set amidst lush greenery, enhancing its tranquil atmosphere and providing visitors with a sense of peace and spiritual solace.
            Culturally, the temple plays a vital role in the lives of the local community. It serves as a center for religious ceremonies, festivals, and meditation retreats. The annual procession, or *perahera*, held in honor of the Buddha, is a highlight of the temples calendar, attracting devotees from across the region. This event features traditional drumming, dancing, and an elaborately decorated elephant carrying a replica of the Tooth Relic, symbolizing its historical journey through the region.Madukanda Viharaya also serves as a testament to Sri Lankas enduring Buddhist heritage and its rich history. While relatively less known compared to other famous temples like the Temple of the Sacred Tooth Relic in Kandy, Madukanda offers a quieter and more intimate experience for visitors. Its blend of spiritual significance, natural beauty, and cultural vibrancy makes it a must-visit destination for anyone seeking a deeper understanding of Sri Lankas Buddhist traditions and historical roots.',
            'category' => 'Archeological',
            'location' => '4 kilometers off Vavuniya town along the Horowpothana road',
            'district' => 'Vavuniya',
            'photo' => 'photos/Madukanda Viharaya.JPG',
            'suggested_by' => 2,
            'status' => 'accepted',
            'longitude' => 80.53023823209973,
            'latitude' => 8.745214693394338,
        ]);

        Place::create([
        
            'name' => 'Kimbulagala',
            'description' => 'Kimbulagala in Vavuniya is a historically and archaeologically significant site in northern Sri Lanka. The name "Kimbulagala," meaning "Crocodile Rock," is derived from the unique shape of the rocky outcrop resembling a crocodile. Nestled amidst serene natural surroundings, this location holds immense cultural and historical value, reflecting the region’s rich heritage.
            The site is believed to have been a Buddhist monastic complex during the ancient Anuradhapura period. Evidence of meditation caves, stone inscriptions, and ruins of ancient stupas can still be observed, indicating the presence of a thriving Buddhist community in the past. These caves often feature drip-ledges, which were designed to prevent rainwater from seeping into the interiors, a hallmark of monastic architecture in Sri Lanka.
            Kimbulagala also provides a glimpse into the architectural and spiritual practices of ancient times. The inscriptions found here, written in early scripts, often document donations made to the monastery and other details about the site’s historical significance.
            Surrounded by unspoiled natural beauty, Kimbulagala offers a tranquil atmosphere, making it a hidden gem for visitors interested in history and archaeology. It remains an important reminder of the cultural and religious practices that once flourished in the northern part of Sri Lanka',
            'category' => 'Historical',
            'location' => 'located in Vavuniya',
            'district' => 'Vavuniya',
            'photo' => 'photos/Kimbulagala-rock-small__Resampled.jpeg',
            'suggested_by' => 2,
            'status' => 'accepted',
            'longitude' => 80.60299771706349,
            'latitude' => 8.871187916273474,
        ]);

        Place::create([
        
            'name' => 'Thonigala Inscription',
            'description' => 'The Thonigala Inscription is an important ancient inscription found in the southern part of Sri Lanka. Dating back to the 2nd century BCE, it offers valuable insight into the early political and social structure of the island. The inscription, carved into a rock, records a decree by King Devana Piyatissa, the ruler of the Anuradhapura kingdom, and discusses the granting of land for religious purposes, reflecting the relationship between the monarchy and Buddhism at the time. The language of the inscription is an early form of Sinhala, and it is one of the earliest examples of written records in Sri Lanka.
            The Thonigala Inscription is crucial for historians and archaeologists as it provides direct evidence of the royal patronage of Buddhism, a significant theme in ancient Sri Lankan history. It also highlights the use of inscriptions to document royal decrees, a practice that would become widespread throughout the island. The site is an important archaeological location and continues to be a subject of study for those interested in the development of early Sri Lankan civilization and its interaction with Buddhism.',
            'category' => 'Urban',
            'location' => 'situated in Anamaduwa of Sri Lanka',
            'district' => 'Vavuniya',
            'photo' => 'photos/Thonigala_Rock_Inscription,_Anamaduwa_1.jpg',
            'suggested_by' => 2,
            'status' => 'accepted',
            'longitude' => 80.58926480648732,
            'latitude' => 8.781624067222637,
        ]);

        Place::create([
        
            'name' => 'Nalanda Gedige',
            'description' => 'The Nalanda Gedige archaeological site, located in the Matale District of Sri Lanka, is a captivating monument known for its unique blend of cultural and architectural styles. Constructed between the 8th and 10th centuries, the site is often described as an emblem of Sri Lankas historical religious syncretism. It is a small stone structure resembling a Hindu temple, yet it intriguingly incorporates Buddhist elements, reflecting the islands rich and diverse cultural heritage. Surrounded by lush greenery, the temple is positioned on an artificial island, adding to its serene and picturesque appeal.
            One of the most striking features of Nalanda Gedige is its architectural design, which showcases the influence of Dravidian and Pallava styles from South India. The carvings and sculptures adorning the temple walls depict scenes and motifs typically associated with Hindu deities and mythological figures. However, there is also evidence to suggest that the site was used for Buddhist worship, particularly due to the absence of a prominent sanctum for idol worship and the presence of a central stupa-like structure. This duality highlights the harmonious coexistence of Buddhism and Hinduism in ancient Sri Lanka.
            The temple was rediscovered in the early 20th century and underwent significant restoration during the 1980s. During the restoration process, the temple was carefully dismantled and reconstructed at a nearby location to save it from submersion due to the construction of the Bowatenna Reservoir. This painstaking effort ensured that the integrity of the site was preserved while protecting it from potential damage. Today, Nalanda Gedige is a well-maintained historical site, attracting visitors keen to explore its unique architecture and tranquil surroundings.
            Nalanda Gedige is not just a testament to the islands historical religious diversity but also an example of the enduring craftsmanship and cultural sophistication of ancient Sri Lankan builders. Its location, set amidst peaceful rural landscapes, provides an ideal setting for reflection and appreciation of the islands past. As a lesser-known but significant archaeological treasure, Nalanda Gedige continues to offer insights into the dynamic interplay of culture, religion, and art that shaped Sri Lankas history.',
            'category' => 'Archeological',
            'location' => 'near Matale, Sri Lanka',
            'district' => 'Matale',
            'photo' => 'photos/nalandagedige.jpg',
            'suggested_by' => 2,
            'status' => 'accepted',
            'longitude' => 80.64419644879204,
            'latitude' => 7.743335080401492,
        ]);

        Place::create([
        
            'name' => 'Alu viharaya',
            'description' => 'The Alu Viharaya, or Aluvihara Rock Cave Temple, is a historically significant Buddhist site located in Matale, Sri Lanka. Nestled amidst lush greenery and dramatic rock formations, this sacred temple holds a pivotal place in the island’s spiritual and cultural heritage.
            The Alu Viharaya is famously associated with the written preservation of Buddhist teachings. During the reign of King Valagamba in the 1st century BCE, Sri Lanka faced internal strife and invasions, threatening the oral transmission of the Pali Canon. To safeguard the teachings, Buddhist monks convened at Alu Viharaya and inscribed them on palm leaves, marking a milestone in the history of Buddhism.
            The temple complex consists of several caves adorned with ancient murals, statues of the Buddha, and scenes from Buddhist history. These artworks reflect the artistic and spiritual achievements of the Anuradhapura and Kandyan periods. One notable feature is the depiction of Buddhist hell, painted to educate devotees about the consequences of negative actions.
            Today, Alu Viharaya remains a revered pilgrimage site, drawing visitors for its historical significance and serene environment. The temple stands as a symbol of resilience and dedication, preserving Buddhist traditions and serving as a reminder of Sri Lankas profound spiritual legacy.',
            'category' => 'Historical',
            'location' => 'Aluvihare, Matale District of Sri Lanka',
            'district' => 'Matale',
            'photo' => 'photos/I0000ccLvEzYSqE4.jpg',
            'suggested_by' => 1,
            'status' => 'accepted',
            'longitude' => 80.61947720975492,
            'latitude' => 7.574566211316932,
        ]);

        Place::create([
        
            'name' => 'Sigiriya',
            'description' => 'Sigiriya, often referred to as the "Lion Rock," is one of Sri Lanka’s most iconic and historically significant landmarks. Located in the Matale District near Dambulla, this ancient rock fortress and palace complex is a UNESCO World Heritage Site, celebrated for its unique blend of natural beauty, historical intrigue, and artistic achievements.
            Built during the reign of King Kashyapa in the 5th century CE, Sigiriya served as the kings royal citadel. Rising nearly 200 meters above the surrounding plains, the massive rock is crowned with the ruins of a once-splendid palace. Its strategic location and elaborate design highlight Kashyapa’s vision and military foresight.
            The site is renowned for its remarkable frescoes, often referred to as the "Sigiriya Maidens," depicting ethereal female figures adorned with jewelry and vibrant colors. Another standout feature is the Mirror Wall, originally polished to reflect the kings image and later inscribed with ancient graffiti by visitors.
            The surrounding gardens, one of the oldest landscaped gardens in the world, include sophisticated water systems, terraces, and boulder arrangements. Sigiriya’s historical significance, combined with its breathtaking views and architectural marvels, makes it a symbol of Sri Lanka’s cultural and artistic heritage, attracting visitors from around the globe',
            'category' => 'Urban',
            'location' => 'northern Matale District near the town of Dambulla in the Central Province, Sri Lanka.',
            'district' => 'Matale',
            'photo' => 'photos/Sigiriya_0.jpg',
            'suggested_by' => 1,
            'status' => 'accepted',
            'longitude' => 80.76504606186249,
            'latitude' => 8.031718105592033,
        ]);

        Place::create([
        
            'name' => 'Shailabimbarama Maha Viharaya',
            'description' => "Shailabimbarama Maha Viharaya is an ancient Buddhist archaeological site located in Sri Lanka, renowned for its rich history and cultural significance. Situated in the Sabaragamuwa Province, it is believed to have been an important center of Buddhist monastic life and learning. The site is associated with the era of King Devanampiya Tissa, who reigned during the 3rd century BCE, and is thought to have been established around the same period as other key Buddhist sites on the island. The name Shailabimbarama is derived from the term Shaila, meaning rock, and Bimbarama, referring to a monastery, highlighting its connection to rock caves and natural surroundings.
            One of the most notable features of Shailabimbarama Maha Viharaya is its rock-cut caves, which were used by Buddhist monks for meditation and study. These caves are spread across a scenic hilltop and have inscriptions that date back to the ancient Anuradhapura period, offering insights into the religious and cultural practices of early Sri Lankan Buddhists. The site is also home to a number of ancient stupas and images of the Buddha, providing valuable archaeological evidence of the spiritual practices of the time. The architectural design and layout of the site reflect the typical monastic establishments of ancient Sri Lanka, emphasizing a deep connection to nature and the serene environment.
            In addition to its historical and religious importance, the Shailabimbarama Maha Viharaya is a symbol of Sri Lanka's rich Buddhist heritage. The site was once an active pilgrimage destination, attracting devotees from across the island who came to pay homage and seek spiritual solace. Over time, however, the site fell into disuse and was partially abandoned, leading to the gradual erosion of its structures. Despite this, the site remains a place of interest for archaeologists and historians, offering a glimpse into the religious landscape of ancient Sri Lanka.
            Today, Shailabimbarama Maha Viharaya is considered an important archaeological site, and efforts are being made to preserve and protect it. Researchers continue to study the inscriptions and artifacts found at the site to learn more about the early development of Buddhism in Sri Lanka. The site is also a popular spot for tourists interested in Sri Lanka's ancient history and culture, providing an opportunity to explore the deep spiritual legacy that shaped the island's Buddhist traditions." ,
            'category' => 'Archeological',
            'location' => 'Dodanduwa in Galle District, Sri Lanka.',
            'district' => 'Galle',
            'photo' => 'photos/hq720.jpg',
            'suggested_by' => 1,
            'status' => 'accepted',
            'longitude' => 80.13134835405451,
            'latitude' => 6.101094890338615,
        ]);

        Place::create([
        
            'name' => 'Ranpath Viharaya Thotagamuwa',
            'description' => 'Ranpath Viharaya, located in Thotagamuwa near Hikkaduwa in southern Sri Lanka, is a historically and culturally significant Buddhist temple with a rich heritage. The temple, also known as Thotagamuwa Ranpath Raja Maha Viharaya, dates back to ancient times and is renowned for its contributions to Buddhist learning, art, and spirituality.
            This sacred site gained prominence during the Kotte Kingdom era, particularly as a center of Buddhist scholarship. It is closely associated with the renowned scholar monk Thotagamuwe Sri Rahula Thero, a literary giant and poet who composed several masterpieces while residing here. His works enriched Sri Lankan literature and helped preserve the Theravada Buddhist tradition during challenging times.
            The temple complex is adorned with unique architectural and artistic features. Among its treasures are ancient statues, intricately carved pillars, and stone inscriptions that reflect the temple’s historical and religious significance. The Ranpath (Golden Leaf) manuscripts, which are believed to have been kept here, further symbolize its role as a center of knowledge and learning.
            Surrounded by serene natural beauty, Ranpath Viharaya continues to serve as a place of worship, meditation, and cultural preservation. It remains a testament to Sri Lanka’s rich Buddhist heritage and enduring devotion to spiritual and intellectual pursuits.',
            'category' => 'Historical',
            'location' => 'near the Telwatte Temple',
            'district' => 'Ampara',
            'photo' => 'photos/images.jpeg',
            'suggested_by' => 1,
            'status' => 'accepted',
            'longitude' => 80.09161836884873,
            'latitude' => 6.170723960722069,
        ]);

        Place::create([
        
            'name' => 'Galle fort',
            'description' => "Galle Fort, located in the coastal city of Galle in southern Sri Lanka, is a UNESCO World Heritage Site and a magnificent example of colonial architecture and cultural fusion. Originally built by the Portuguese in 1588, the fort was extensively fortified by the Dutch in the 17th century, making it one of the best-preserved European fortifications in Asia.
            The fort spans approximately 130 acres and is encircled by imposing stone walls that protected it from invasions and natural calamities. Within its boundaries lies a fascinating blend of history, architecture, and modern life. Cobblestone streets, colonial-style buildings, churches, mosques, and Buddhist temples reflect the diverse influences that have shaped its character over centuries.
            Key attractions include the iconic Galle Lighthouse, the Dutch Reformed Church, the National Maritime Museum, and the Old Dutch Hospital, now transformed into a vibrant shopping and dining precinct. The ramparts offer breathtaking views of the Indian Ocean, particularly during sunset.
            Galle Fort is a bustling hub where history and culture coexist with contemporary lifestyles. It hosts art galleries, boutique hotels, and cafes, attracting tourists and locals alike. Its timeless charm and rich heritage make Galle Fort a symbol of Sri Lanka’s multicultural history and a must-visit destination.",
            'category' => 'Urban',
            'location' => 'Bay of Galle on the southwest coast of Sri Lanka',
            'district' => 'Ampara',
            'photo' => 'photos/beach_inns_website_tours_900x500px_galle-3.jpg',
            'suggested_by' => 1,
            'status' => 'accepted',
            'longitude' => 80.2174025050068,
            'latitude' => 6.027105887315214,
        ]);

        Place::create([
        
            'name' => 'Mirissa Samudragiri Viharaya',
            'description' => "Mirissa Samudragiri Viharaya is an important archaeological and historical site located in the southern region of Sri Lanka, near the town of Mirissa. This ancient Buddhist temple is known for its connection to the early development of Buddhism in the island and its strategic location near the sea. The site is believed to have been an active Buddhist monastery and pilgrimage center for centuries, offering insights into the religious and cultural practices of ancient Sri Lanka. The temple’s proximity to the ocean also suggests it may have had a maritime significance, possibly serving as a stopping point for Buddhist traders and monks traveling across the Indian Ocean.
            The Mirissa Samudragiri Viharaya complex contains remnants of ancient structures, including stupas, stone inscriptions, and other architectural elements that reflect the craftsmanship of Sri Lanka's ancient builders. The site is particularly notable for its large stupa, which has been partially restored to reveal its original grandeur. The stupa, along with other structures, provides valuable information about the architectural styles and techniques used during the Anuradhapura and Polonnaruwa periods. Inscriptions found at the site also shed light on the social, political, and religious life of the time.
            Excavations at the Mirissa Samudragiri Viharaya have unearthed numerous artifacts, including pottery, coins, and tools, offering a glimpse into the everyday life of the people who once inhabited the area. These discoveries have helped archaeologists piece together the history of the site and its role in Sri Lanka’s ancient civilization. The artifacts suggest a thriving community that engaged in trade, agriculture, and religious practices. The maritime nature of the region also implies that the site had connections to international trade routes, further enriching the cultural exchange between Sri Lanka and other parts of Asia.
            Today, the Mirissa Samudragiri Viharaya site continues to be a place of pilgrimage and study, attracting visitors interested in exploring Sri Lanka’s Buddhist heritage. The serene environment, combined with the site's archaeological significance, makes it a unique destination for those interested in the history of Buddhism and ancient Sri Lankan culture. The continued preservation and research at the site ensure that the historical and cultural significance of Mirissa Samudragiri Viharaya will remain an important part of Sri Lanka’s rich heritage for future generations.",
            'category' => 'Archeological',
            'location' => 'Veragalla Samudragiri Viharaya lies on a coconut grove close to the beaches of Mirissa',
            'district' => 'Matara',
            'photo' => 'photos/Mirissa Viharaya.webp',
            'suggested_by' => 1,
            'status' => 'accepted',
            'longitude' => 80.45352282820978,
            'latitude' => 5.956320686924802,
        ]);

        Place::create([
        
            'name' => 'Gajamannona Home',
            'description' => "Gajamannona Home is a revered historical site located in the heart of Sri Lanka, offering visitors a glimpse into the country's rich cultural heritage. The home is renowned for its association with Gajamannona, a prominent figure in Sri Lankan history who was a symbol of bravery and wisdom. His contributions to the community and the development of local traditions make the home a significant cultural landmark.
            The structure of Gajamannona Home reflects traditional Sri Lankan architecture, with intricate carvings and wooden features that highlight the craftsmanship of the era. Surrounded by lush greenery, the home was built using local materials, emphasizing sustainability and harmony with nature. It also serves as a testament to the architectural prowess of the past.
            Today, Gajamannona Home stands as a place where history and culture converge. Visitors can explore the artifacts, documents, and stories that bring the legacy of Gajamannona to life. The site hosts cultural events and educational programs, offering opportunities to experience traditional Sri Lankan music, dance, and art.
            Gajamannona Home is not just a place of historical importance but also a sanctuary that showcases the enduring spirit of Sri Lanka’s heritage. It offers a peaceful retreat for those seeking to connect with the past while appreciating the beauty of Sri Lankan culture",
            'category' => 'Historical',
            'location' => 'Nonagama Junction in Ambalanthota on the Matara',
            'district' => 'Matara',
            'photo' => 'photos/LK94008885-06-E.jpeg',
            'suggested_by' => 2,
            'status' => 'accepted',
            'longitude' => 80.55290078233884,
            'latitude' => 5.95481800958117,
        ]);

        Place::create([
        
            'name' => 'Nupe Market',
            'description' => "Nupe Market, located in the southern part of Sri Lanka, is a bustling traditional market that plays a significant role in the local economy and culture. The market is well-known for its vibrant display of fresh produce, seafood, spices, and local crafts, offering visitors a glimpse into the island’s agricultural richness and its diverse culinary traditions. Nupe Market serves as a meeting point for people from surrounding villages, where they come to buy and sell goods, as well as socialize and exchange news. The market's lively atmosphere is filled with the sounds of bargaining, local dialects, and the vibrant colors of fresh fruits and vegetables.
            The historical importance of Nupe Market goes beyond its commercial function. It is a cultural gathering space where traditional practices and local customs are preserved. The market's role in sustaining the region's economy and its connection to the daily lives of the people make it an essential part of Sri Lanka's urban and rural landscape. Nupe Market continues to serve as a symbol of Sri Lanka's agricultural heritage and its ability to sustain a vibrant local economy despite modern pressures.",
            'category' => 'Urban',
            'location' => 'about 3.2 kilometres (2.0 mi) from Matara fort, at the junction of the Matara-Akuressa Highway (A24) and Matara Road',
            'district' => 'Matara',
            'photo' => 'photos/65466004.webp',
            'suggested_by' => 2,
            'status' => 'accepted',
            'longitude' => 80.53502280932045,
            'latitude' => 5.948184028756521,
        ]);

        Place::create([
        
            'name' => 'Mulgirigala',
            'description' => "Mulkirigala Raja Maha Viharaya, often referred to as Mulkirigala Rock Temple, is a stunning ancient Buddhist monastery located in the Hambantota district of Sri Lanka. Nestled atop a towering rock outcrop, the temple is a masterpiece of history, art, and spirituality, offering visitors a profound cultural experience.
            Dating back over 2,000 years, Mulkirigala is believed to have been established during the reign of King Saddhatissa. The temple complex consists of several cave shrines, each adorned with intricate murals and statues depicting the life of Buddha. These caves are arranged on multiple terraces, leading to the summit, which provides breathtaking panoramic views of the surrounding landscapes.
            One of Mulkirigala’s most remarkable features is its exquisite frescoes, showcasing the vibrant artistry of ancient Sri Lankan craftsmen. The sacred Bo tree, thought to be a sapling from the Jaya Sri Maha Bodhi in Anuradhapura, adds a deeply spiritual dimension to the site.
            Mulkirigala is not only a place of worship but also a testament to Sri Lanka’s architectural and cultural heritage. For pilgrims and tourists alike, the serene ambiance and historical significance of Mulkirigala make it an unmissable destination, celebrating the timeless beauty of Buddhist tradition.",
            'category' => 'Archeological',
            'location' => 'ancient Buddhist temple in Mulkirigala, Sri Lanka.',
            'district' => 'Hambantota',
            'photo' => 'photos/Mulkirigala113a.jpg',
            'suggested_by' => 2,
            'status' => 'accepted',
            'longitude' => 80.73822832466664,
            'latitude' => 6.122659811371031,
        ]);

        Place::create([
        
            'name' => 'Andare Tomb',
            'description' => "The Andare Tomb, located in the picturesque village of Udamalala in the Hambantota district, stands as a humble yet significant monument honoring Andare, the legendary court jester of Sri Lanka. Renowned for his sharp wit, humor, and intelligence, Andare served in the royal court during the 18th century, becoming a beloved figure in Sri Lankan folklore.
            Andare’s tales are woven into the cultural fabric of Sri Lanka, celebrated for their moral lessons and comedic brilliance. His clever retorts and humorous escapades, often directed at nobility, demonstrated his unique ability to critique authority while entertaining the masses. The tomb serves as a lasting reminder of his remarkable contribution to the island’s cultural heritage.
            The tomb itself is modest, reflecting Andare’s humble origins. Surrounded by a serene rural setting, the site attracts visitors who wish to pay tribute to this iconic figure and learn about his enduring legacy. Informational plaques and folklore enthusiasts in the area often recount his many exploits, ensuring his memory remains alive.
            Visiting Andare Tomb offers a glimpse into the life of a historical figure whose wit transcended time, making him an enduring symbol of Sri Lanka’s rich storytelling tradition and love for humor.",
            'category' => 'Historical',
            'location' => 'Devinuwara in the Matara district',
            'district' => 'Hambantota',
            'photo' => 'photos/IMG_3701.jpg',
            'suggested_by' => 2,
            'status' => 'accepted',
            'longitude' => 81.16390899583044,
            'latitude' => 6.176732957040113,
        ]);

        Place::create([
        
            'name' => 'Katuwana Fort',
            'description' => "Katuwana Fort, located in the southern region of Sri Lanka, was built during the Dutch colonial period as part of their strategic defense network. Constructed in the 17th century, the fort played a vital role in protecting the island's southern coastline and the important trade routes passing through the region. The fort is a relatively small, but historically significant structure, with remnants of its defensive walls and bastions still visible. Although much of it has been damaged over time, Katuwana Fort provides a tangible connection to the colonial era and the Dutch influence on Sri Lankan fortifications.
            While it is not as famous as other forts in Sri Lanka, Katuwana Fort holds cultural and historical significance due to its role in the island’s military history. The fort’s location, close to the town of Katuwana, has allowed it to remain a point of interest for historians and tourists. Today, the site is less visited than some of the more famous forts in Sri Lanka, but it continues to serve as an important reminder of the island’s colonial past and its strategic importance during the Dutch period.",
            'category' => 'Urban',
            'location' => 'Katuwana Fort is such a fort located in the Katuwana divisional secretary of Hambantota District.',
            'district' => 'Hambantota',
            'photo' => 'photos/02.jpg',
            'suggested_by' => 2,
            'status' => 'accepted',
            'longitude' => 80.69527739583079,
            'latitude' => 6.2677734055399865,
        ]);

        Place::create([
        
            'name' => 'Buduruwagala',
            'description' => "Nestled in the verdant landscapes of Wellawaya in Sri Lanka’s Monaragala District, the Buduruwagala Archeological Site is a breathtaking testament to the island’s rich spiritual and artistic heritage. The centerpiece of this sacred site is a colossal rock carving of a standing Buddha, which stands at an impressive 51 feet, making it the tallest Buddha statue in Sri Lanka.
            Dating back to the 10th century, Buduruwagala reflects the Mahayana Buddhist influence during the Anuradhapura and Polonnaruwa periods. The central Buddha figure is flanked by seven smaller statues, believed to represent Bodhisattvas and deities, carved into the same rock face. These intricate carvings, adorned with remnants of ancient plaster and paint, showcase the artistry and devotion of the period.
            The site’s name, Buduruwagala, translates to “rock with Buddha statues,” perfectly encapsulating its significance. Surrounded by tranquil greenery and a serene reservoir, it provides visitors a meditative retreat into history and spirituality.
            Buduruwagala is not merely an archeological treasure but also a living monument to Sri Lanka’s Buddhist legacy. For history enthusiasts, art lovers, and spiritual seekers, this enchanting site offers an unforgettable journey into the past, where religion and artistry converge in timeless harmony.",
            'category' => 'Archeological',
            'location' => 'about 4 miles (6.4 km) southeast of Wellawaya in Monaragala district, Sri Lanka.',
            'district' => 'Monaragala',
            'photo' => 'photos/poya-worship-buduruwagala-worshippers-praying-full-moon-day-ancient-sacred-carvings-sri-lanka-47640929.webp',
            'suggested_by' => 2,
            'status' => 'accepted',
            'longitude' => 81.08002599230583,
            'latitude' => 6.686663695738248,
        ]);

        Place::create([
        
            'name' => 'Galabadda Pokuna',
            'description' => "Galabadda Pokuna, located in the central part of Sri Lanka, is an ancient reservoir that dates back to the Anuradhapura period. This water tank was originally constructed to supply water for irrigation, an essential part of Sri Lanka’s agrarian economy in ancient times. The archaeological site is known for its impressive stonework and the intricate channels that still function to this day, serving as a testament to the advanced engineering skills of ancient Sri Lankan civilization. Galabadda Pokuna is surrounded by lush greenery, making it not only a historical site but also a picturesque location for visitors to explore. The tank's role in the development of the surrounding region’s agricultural systems highlights its cultural and historical significance.",
            'category' => 'Historical',
            'location' => 'Located in Galabedda, about 9 kilometers away from the A4 Monaragala - Pottuvil Road',
            'district' => 'Monaragala',
            'photo' => 'photos/kumana-52.jpg',
            'suggested_by' => 2,
            'status' => 'accepted',
            'longitude' => 81.3875291868238,
            'latitude' => 6.917756575833532,
        ]);

        Place::create([
        
            'name' => 'govinda hela',
            'description' => "Govinda Hela, located in the central highlands of Sri Lanka, is an ancient rock shelter that is believed to have been a site of Buddhist meditation and retreat. The site features a cave with inscriptions dating back to the 2nd century BCE, providing evidence of early Buddhist monastic life on the island. The cave’s location, surrounded by lush forests and natural beauty, made it an ideal place for meditation and contemplation. It is thought that the site was used by early Buddhist monks seeking solitude and spiritual enlightenment in the serene environment of the highlands.
            Govinda Hela is significant for its archaeological value and its role in the spread of Buddhism in Sri Lanka. The inscriptions found at the site offer insight into the early religious practices of the island and the connection between Buddhism and the natural landscape. The site is also important for understanding the development of monastic life in Sri Lanka, as it represents the humble and simple living conditions of early Buddhist monks. Today, Govinda Hela remains a peaceful site, drawing pilgrims and visitors interested in Sri Lanka’s spiritual heritage and natural beauty.",
            'category' => 'Urban',
            'location' => 'Located in Siyambalanduwa, on the border of the Ampara District in the Eastern Province of Sri Lanka',
            'district' => 'Monaragala',
            'photo' => 'photos/LK94007405-02-E.jpeg',
            'suggested_by' => 2,
            'status' => 'accepted',
            'longitude' => 81.54648175512627,
            'latitude' => 7.035794863039993,
        ]);

        Place::create([
        
            'name' => 'St. Andrew\'s Church',
            'description' => "St. Andrew’s Church in Badulla is a magnificent example of Sri Lanka’s colonial-era architecture and Christian heritage. Built in 1857 during British rule, this Anglican church stands as a symbol of faith and history, offering a serene retreat amidst the bustling town of Badulla.
            Perched on a scenic hill, the church is surrounded by well-maintained gardens that add to its peaceful ambiance. The Gothic architectural design, characterized by pointed arches, stained glass windows, and stone walls, reflects the European influence of the time. The vibrant stained glass panels depict biblical scenes, while the wooden pews and high ceilings create an atmosphere of reverence and tranquility.
            St. Andrew’s Church has a rich history tied to the British tea planters who resided in the region. It served as a spiritual haven for them and continues to hold services for worshippers and visitors alike. The churchyard contains several old gravestones, which provide a glimpse into the lives of those who lived during the colonial era.
            Today, St. Andrew’s Church is not only a place of worship but also a cherished historical landmark. Visitors are drawn to its architectural beauty, serene surroundings, and the stories it holds from a bygone era.",
            'category' => 'Archeological',
            'location' => 'Haputale, Badulla District, Sri Lanka',
            'district' => 'Badulla',
            'photo' => 'photos/church-of-saint-andrew-haputale-badulla-district-uva-province-sri-epnb3a.jpg',
            'suggested_by' => 2,
            'status' => 'accepted',
            'longitude' => 81.05816383387408,
            'latitude' => 6.997498181791844,
        ]);

        Place::create([
        
            'name' => 'Sorabora Wewa',
            'description' => "Sorabora Wewa, located in Mahiyanganaya, is a breathtaking ancient reservoir that exemplifies Sri Lanka's exceptional hydraulic engineering heritage. Believed to have been constructed during the reign of King Dutugemunu (161–137 BCE) by a giant named Bulatha, this massive irrigation marvel remains a vital water source for agriculture in the region.
            Unlike most ancient reservoirs that rely on sluice gates, Sorabora Wewa employs a unique rock-cut sluice channel carved into a massive stone slab. This ingenious design controls water flow and prevents overflow during heavy rains, reflecting the advanced engineering skills of the time. The reservoir, spread over hundreds of acres, is fed by the Hulu River and provides irrigation to surrounding paddy fields, supporting local farming communities for centuries.
            Sorabora Wewa is not only an engineering marvel but also a site of natural beauty. The calm waters are surrounded by lush greenery, making it a peaceful spot for visitors. Activities like boat rides and fishing add to its charm, while nearby legends about its construction lend a sense of mystery and wonder.
            This ancient reservoir stands as a testament to Sri Lanka’s rich history and innovative spirit, continuing to inspire awe and admiration among all who visit.",
            'category' => 'Historical',
            'location' => 'Mahiyangana, Badulla District Sri Lanka.',
            'district' => 'Badulla',
            'photo' => 'photos/sorabora-lake-mahiyanganaya-srilanka-manual-photography.jpg',
            'suggested_by' => 2,
            'status' => 'accepted',
            'longitude' => 81.02201959478687,
            'latitude' => 7.365101456509764,
        ]);

        Place::create([
        
            'name' => 'Welekade Dutch Fort',
            'description' => "The Welekade Dutch Fort, located near the town of Matara in southern Sri Lanka, was built by the Dutch in the 17th century as part of their colonial efforts to control the island’s coastal regions. The fort was strategically located to protect the region from external threats and to oversee the port and trade activities in the area. Over the years, the fort has undergone several modifications, but its Dutch architectural influence remains evident in the design of the walls, bastions, and entrances. The Welekade Dutch Fort also played a role in the defense of Sri Lanka during the conflicts between the Dutch, Portuguese, and British.
            While the fort is not as well-preserved as some other colonial-era forts in Sri Lanka, it still serves as an important historical landmark. The fort's location near the coast and its connection to the region's colonial history make it a valuable site for visitors interested in Sri Lanka’s past. Today, the Welekade Dutch Fort is a peaceful location, offering a glimpse into the island’s complex colonial history and its interactions with European powers during the 17th and 18th centuries.",
            'category' => 'Urban',
            'location' => 'Badulla, Sri Lanka',
            'district' => 'Badulla',
            'photo' => 'photos/LK94007415-03-E.jpeg',
            'suggested_by' => 2,
            'status' => 'accepted',
            'longitude' => 81.05398119583391,
            'latitude' => 6.991461823320915,
        ]);

        Place::create([
        
            'name' => 'Kandurugoda Viharaya',
            'description' => 'Kandurugoda Viharaya, located in the Jaffna district near Chunnakam, is a fascinating archaeological site that offers a glimpse into Sri Lanka’s ancient Buddhist past. This historic temple complex, believed to date back to the Anuradhapura era, is renowned for its unique cluster of small stupas, making it an iconic landmark in the northern region of the island.
            The site features approximately 60 miniature stupas built with coral and limestone, showcasing the distinct architectural style of the time. These stupas, varying in size and shape, are thought to have enshrined the relics of Buddhist monks, indicating the area’s importance as a monastic center. The stupas are arranged in a compact layout, creating a visually striking ensemble that has intrigued historians and visitors alike.
            Kandurugoda Viharaya also holds historical significance as evidence of the spread of Buddhism to northern Sri Lanka. Despite its location in a region primarily influenced by Hindu culture, the site reflects the religious diversity and coexistence that characterized ancient Sri Lankan society.
            Today, Kandurugoda Viharaya is a protected archaeological site and a serene destination for history enthusiasts and spiritual seekers. Its tranquil ambiance and rich history make it a must-visit for anyone exploring Sri Lanka’s cultural heritage',
            'category' => 'Archeological',
            'location' => 'Ancient Kadurugoda Viharaya ; Jaffna · Northern Province · Chunnakam, Sri Lanka.',
            'district' => 'Jaffna',
            'photo' => 'photos/experiences-Kadurugoda-Temple-gallary2.jpg',
            'suggested_by' => 2,
            'status' => 'accepted',
            'longitude' => 80.0065366916669,
            'latitude' => 9.753978643090278,
        ]);

        Place::create([
               
                'name' => 'Keeramale Ponnali Pokuna',
                'description' => "Keeramale Ponnali Pokuna, a serene historical site located in the northern part of Sri Lanka, is an ancient pond associated with Buddhist monasticism. The site is believed to have been used by monks for religious purposes, including meditation and purification rituals. The pond is known for its unique architectural design, with stone carvings and inscriptions around its perimeter. The area surrounding the pond is lush and tranquil, providing a peaceful setting for visitors to reflect on Sri Lanka’s rich Buddhist heritage. Keeramale Ponnali Pokuna remains an important site for Buddhist devotees and historians alike, offering insight into the spiritual practices of ancient Sri Lankan monks.",
                'category' => 'Historical',
                'location' => 'northern part of the Jaffna Peninsula',
                'district' => 'Ampara',
                'photo' => 'photos/naguleswaram-temple-jaffna-ramayana-tour-sri-lanka-ceylon-expeditions-1-1.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.01248141040396,
                'latitude' => 9.827298490568031,
        ]);

            Place::create([
            
            
                'name' => 'Jaffna Dutch Fort',
                'description' => "The Jaffna Dutch Fort is a significant historical site located in the northern part of Sri Lanka. Built by the Portuguese in the 17th century and later expanded by the Dutch, it served as a military stronghold during colonial times. The fort is strategically located in the city of Jaffna, overlooking the surrounding landscape and offering views of the northern coastline. The fortifications include high walls, bastions, and a moat, and the site is a fine example of European military architecture in Sri Lanka. The fort played a key role in the defense of the northern region during the colonial period.
                The Jaffna Dutch Fort is not only important for its historical and military value but also for its cultural significance. It is a symbol of the island's complex colonial past, reflecting the impact of both Portuguese and Dutch rule in the region. The fort has been partially restored, and visitors can explore its structures, including the old Dutch church and the administrative buildings. Today, the Jaffna Dutch Fort stands as a reminder of Sri Lanka’s colonial heritage and is a popular destination for tourists and history enthusiasts.",
                'category' => 'Urban',
                'location' => 'Jaffna, Sri Lanka',
                'district' => 'Jaffna',
                'photo' => 'photos/Jaffna-Fort-Sri-Lanka-1140x530.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.0084895688699,
                'latitude' => 9.66229510649001,
            ]);

            Place::create([
        
                'name' => 'Murunkan Raja Maha Viharaya',
                'description' => "Murunkan Raja Maha Viharaya, located in the Mannar district of Sri Lanka, is an ancient Buddhist temple with profound historical and spiritual significance. This sacred site, believed to date back to the Anuradhapura era, showcases the island’s enduring Buddhist heritage and the architectural ingenuity of its early civilizations.
                The temple is surrounded by serene landscapes, creating a tranquil environment for meditation and worship. Its structures, including stone stupas, ancient pillars, and remnants of monastery buildings, reflect the craftsmanship and devotion of the era. Archeological findings at the site, such as inscriptions and artifacts, suggest that it served as an important monastic center and a hub for Buddhist learning and practice.
                Murunkan Raja Maha Viharaya also bears testimony to the spread of Buddhism across the northern regions of Sri Lanka, even in areas known for diverse cultural influences. It has survived the challenges of time and remains a place of reverence for devotees and a site of interest for history enthusiasts.
                Today, the temple continues to be a center for spiritual activity, hosting religious ceremonies and attracting visitors who wish to connect with Sri Lanka’s rich cultural and religious past. Murunkan Raja Maha Viharaya is a beacon of tranquility and a symbol of the island’s ancient Buddhist traditions.",
                'category' => 'Archeological',
                'location' => 'located in K. K. Kulama village in the Irettekulama 125A Gramaseva area',
                'district' => 'Mannar',
                'photo' => 'photos/murukkuwatawana-14.webp',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.05500973216758,
                'latitude' => 8.859693813324792,
            ]);

            Place::create([
      
                'name' => 'Arippu Fort',
                'description' => "Arippu Fort, located on the western coast of Sri Lanka, is a colonial-era fort built by the Portuguese in the 16th century. The fort was later taken over by the Dutch, and it stands as a testament to the island’s colonial history. Arippu Fort is strategically positioned near the entrance to the Puttalam Lagoon, and it was originally constructed to defend the region from potential maritime threats. The fort is now a historical site that attracts visitors interested in Sri Lanka’s colonial past, particularly the influence of European powers on the island. Though much of the structure has eroded over time, the remains of Arippu Fort still offer a glimpse into the military architecture of the Portuguese and Dutch periods.",
                'category' => 'Historical',
                'location' => 'located in Arippu, which is 16 km (9.9 mi) away from Mannar Island.',
                'district' => 'Mannar',
                'photo' => 'photos/doric-house-arippu-mannar-island-sri-lanka-H5H3XH.jpg.',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 79.92969826700846,
                'latitude' => 8.792769760041576
            ]);

            Place::create([
        
                'name' => 'Mannar Fort',
                'description' => "Mannar Fort is a historic fortification located in the town of Mannar on the northwest coast of Sri Lanka. Built by the Portuguese in the 16th century and later expanded by the Dutch in the 17th century, the fort was designed to defend the island’s northern coastline from external threats. The fort’s strategic location near the Palk Strait made it an important military base during the colonial period, especially for controlling trade routes and protecting the region from invasions. The fort features typical Dutch architectural elements, such as thick stone walls and bastions, which were designed to withstand artillery fire.
                Although much of the fort has been eroded over time, Mannar Fort remains an important symbol of the region’s colonial history. The fort’s preservation allows visitors to explore the remnants of its past, offering insights into the military and colonial presence in Sri Lanka. The surrounding area, which includes the natural beauty of the Mannar Islands and the Palk Strait, adds to the fort's appeal as a tourist destination. Today, Mannar Fort stands as a reminder of Sri Lanka’s strategic importance during the colonial period and offers a unique glimpse into the past.",
                'category' => 'Urban',
                'location' => 'located on Mannar Island, Sri Lanka',
                'district' => 'Mannar',
                'photo' => 'photos/mannar-fort.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 79.9170393111917,
                'latitude' => 8.97603604773804
            ]);

            Place::create([
    
                'name' => 'Ampara rajagala',
                'description' => "Rajagala, also known as Rassaagala, is a remarkable archeological site located in the Ampara district of Sri Lanka. This ancient Buddhist monastery, nestled amidst a serene forested landscape, dates back over 2,000 years to the early Anuradhapura period. It is renowned for its historical, cultural, and religious significance, attracting scholars, pilgrims, and visitors alike.
                The site encompasses a sprawling complex of ruins spread over a rocky hill. It includes stupas, Buddha statues, meditation caves, stone inscriptions, and monastic buildings, reflecting the architectural and spiritual practices of early Buddhism in Sri Lanka. The inscriptions found here, written in Brahmi and early Sinhala scripts, provide invaluable insights into the island’s history and the lives of Buddhist monks who inhabited the monastery.
                Rajagala is believed to have been a secluded meditation retreat for monks, fostering a peaceful and introspective environment. Its name, which translates to Monarch’s Rock, is linked to legends that suggest royal connections to the monastery’s establishment.
                Today, Rajagala is a protected archeological reserve and a popular destination for those interested in history and Buddhism. The site’s natural beauty, combined with its spiritual and historical richness, makes it an unforgettable journey into Sri Lanka’s ancient past.",
                'category' => 'Archeological',
                'location' => 'ampara - mahaoya road.',
                'district' => 'Ampara',
                'photo' => 'photos/Untitled-33.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 81.63306059378111,
                'latitude' => 7.479375939878656
            ]);

            Place::create([
     
                'name' => 'pallebedda vadda village',
                'description' => "The Pallebedda Veddah Village, located in the Ratnapura district of Sri Lanka, offers a rare and insightful glimpse into the lives of the island’s indigenous people, the Veddahs. Known as the original inhabitants of Sri Lanka, the Veddahs have preserved their unique culture, traditions, and way of life for centuries, even amidst the tides of modernization.
                In Pallebedda, visitors can witness the traditional lifestyle of the Veddah community, which is deeply rooted in harmony with nature. Their practices of hunting, gathering, and herbal medicine highlight sustainable living and a profound understanding of the environment. The community also retains its distinct language and folklore, passed down orally through generations.
                The village is an ideal destination for those seeking to learn about Sri Lanka’s cultural diversity and ancient heritage. Guests can engage with the villagers, participate in their rituals, and observe their craftsmanship, such as making bows, arrows, and tools using traditional methods.
                Preservation efforts have ensured that the Veddah culture thrives, even in the face of change. Pallebedda Veddah Village serves as a living museum, where the rich heritage of Sri Lanka’s indigenous people continues to inspire and educate visitors about their enduring legacy.",
                'category' => 'Historical',
                'location' => 'ampara - mahaoya road',
                'district' => 'Ampara',
                'photo' => 'photos/visit-vaddas-sri-lanka-1.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.71848209795725,
                'latitude' => 6.481217764118041
            ]);

            Place::create([
    
                'name' => 'Kurundi Ancient Buddhist Temple',
                'description' => "Kurundi Ancient Buddhist Temple, located in the Mullaitivu district of Sri Lanka, is a significant archaeological and religious site dating back to the Anuradhapura period. Situated atop the Kurundi rock, this temple is a testament to the island’s rich Buddhist heritage and ancient architectural prowess.
                The temple complex, believed to have been established during the reign of King Devanampiya Tissa, showcases remnants of stupas, stone pillars, and inscriptions. These ruins highlight the artistic and spiritual contributions of early Buddhist civilizations in Sri Lanka. Notably, Brahmi script inscriptions found at the site provide valuable insights into the history of Buddhism and its spread across the island.
                Kurundi’s serene location amid lush greenery enhances its spiritual ambiance, making it an ideal retreat for meditation and introspection. It is thought to have been a key monastic center, hosting monks dedicated to the study and practice of Buddhism.
                Despite the passage of centuries and the challenges of preservation, Kurundi Ancient Buddhist Temple remains a symbol of Sri Lanka’s enduring cultural and religious traditions. Visitors and pilgrims are drawn to its historical significance, natural beauty, and the peaceful atmosphere that embodies the essence of Buddhist teachings.",
                'category' => 'Archeological',
                'location' => 'located in a Sinhala Buddhist settlement.',
                'district' => 'Mullaitivu',
                'photo' => 'photos/kurundi-01.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.76083262282887,
                'latitude' => 9.114986771425714
            ]);

            Place::create([
            
                'name' => 'Wattapale kovil',
                'description' => "Wattapale Kovil, located in the central highlands of Sri Lanka, is a revered Hindu temple that reflects the island's vibrant Tamil heritage and religious diversity. Nestled amidst lush greenery and rolling hills, this temple is a spiritual sanctuary for devotees and a remarkable cultural landmark.
                Dedicated to Lord Murugan, the temple is a site of devotion, offering blessings and guidance to worshippers. The architecture of Wattapale Kovil showcases traditional Tamil design elements, including intricately carved gopurams (gateway towers) and colorful sculptures depicting Hindu deities and mythological figures. The sanctum sanctorum houses the main deity, where rituals and prayers are conducted daily.
                The temple is particularly lively during festivals like Thaipusam and Panguni Uthiram, when it attracts large gatherings of devotees from across the region. These celebrations are marked by vibrant processions, traditional music, and cultural performances, creating an atmosphere of joy and spiritual fervor.
                Beyond its religious importance, Wattapale Kovil is a symbol of cultural unity, fostering harmony among diverse communities. For visitors, the temple offers an opportunity to experience the spiritual and cultural richness of Tamil Hindu traditions, making it a must-visit destination for those exploring Sri Lanka’s multicultural identity.",
                'category' => 'Historical',
                'location' => 'Mullaitivu District of Northern Sri Lanka.',
                'district' => 'Mullaitivu',
                'photo' => 'photos/Vatrapalai_Kannagi.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.83266563382116,
                'latitude' => 9.252239355692417
            ]);

            Place::create([

                'name' => 'Thiriyaya Girihandu Seya',
                'description' => "Thiriyaya Girihandu Seya, located in the Trincomalee district, is a sacred Buddhist site believed to be Sri Lanka's oldest stupa, dating back to the 3rd century BCE. According to legend, this stupa was built to enshrine a hair relic of the Buddha, brought to the island by two merchant brothers, Tapassu and Bhalluka, who were among Buddha's earliest lay disciples.
                Perched on a rocky hill, Girihandu Seya offers breathtaking panoramic views of the surrounding landscapes, adding to its spiritual and aesthetic appeal. The site features ancient ruins, including stone inscriptions, guard stones, and meditation caves, reflecting its historical and religious significance. The Brahmi inscriptions found here are considered among the earliest written records in Sri Lanka, providing valuable insights into the island’s early Buddhist practices.
                Girihandu Seya continues to be a revered pilgrimage destination, attracting devotees and history enthusiasts. The serene environment, combined with the spiritual aura of the stupa, creates an ideal setting for meditation and reflection.
                As a monument that bridges myth and history, Thiriyaya Girihandu Seya stands as a timeless symbol of Sri Lanka’s Buddhist heritage, celebrating the island’s role as a cradle of Theravada Buddhism.",
                'category' => 'Archeological',
                'location' => 'Thiriyai, Trincomalee, Sri Lanka',
                'district' => 'Trincomalee',
                'photo' => 'photos/LK94009666-05-E.jpeg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 81.00317608449298,
                'latitude' => 8.884693240671455
            ]);

            Place::create([

                'name' => 'Kanniya Hot Water Springs',
                'description' => "Kanniya Hot Water Springs, located near Trincomalee in Sri Lanka, is a unique blend of natural wonder and cultural significance. Known for its therapeutic hot water wells, the site attracts both pilgrims and tourists seeking healing, relaxation, and spiritual solace.
                The springs consist of seven small wells, each varying in temperature. The water is warm to the touch, believed to have medicinal properties that can alleviate various ailments. Locals and visitors often immerse themselves or collect the water, adhering to long-held traditions about its curative powers.
                Kanniya is steeped in history and legend. According to folklore, the site is linked to King Ravana from the Ramayana epic. It is said that he created the springs to perform rituals for his deceased mother. This connection gives the site spiritual significance for both Hindus and Buddhists. Additionally, historical evidence suggests that Kanniya was once part of a Buddhist monastery during the Anuradhapura era, as indicated by ancient ruins nearby.
                Today, Kanniya Hot Water Springs is a protected site, celebrated for its natural beauty and cultural importance. The serene surroundings and the mystical allure of its waters make it a must-visit destination for those exploring Sri Lanka’s eastern region.",
                'category' => 'Historical',
                'location' => 'located in Trincomalee, Sri Lanka.',
                'district' => 'Trincomalee',
                'photo' => 'photos/Kenniya-Hot-Springs-II.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 81.17141269769822,
                'latitude' => 8.604678228748531
            ]);

            Place::create([
            
    
                'name' => 'Trinco fort',
                'description' => "Trincomalee Fort, also known as Fort Fredrick, is a historic fortification located on the eastern coast of Sri Lanka in Trincomalee. Built in 1624 by the Portuguese and later expanded by the Dutch and British, this iconic structure is a testament to the region's strategic importance in maritime history.
                The fort is situated on Swami Rock, offering stunning views of Trincomalee’s natural harbor—one of the finest deep-water ports in the world. Originally constructed by the Portuguese, it was captured and strengthened by the Dutch in 1639, who renamed it Fort Fredrick. The British took control in 1795 and used it as a key naval base during their colonial rule.
                Within the fort’s sturdy walls, visitors can explore remnants of colonial architecture, including barracks, canons, and gates that echo tales of conquests and seafaring dominance. The fort also houses the revered Koneswaram Temple, a sacred Hindu site perched on Swami Rock, adding spiritual significance to the area.
                Today, Trincomalee Fort stands as a cultural and historical landmark, attracting tourists and history enthusiasts. Its breathtaking views, rich legacy, and blend of colonial and local heritage make it an unmissable destination for those exploring Sri Lanka’s eastern coast.",
                'category' => 'Urban',
                'location' => 'Trincomalee, Eastern Province, Sri Lanka,',
                'district' => 'Trincomalee',
                'photo' => 'photos/20171118_074437.webp',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 81.24329190646378,
                'latitude' => 8.577507523865336
            ]);

            Place::create([
       
                'name' => 'kalladi palama',
                'description' => "Kalladi Palama, located in Batticaloa on Sri Lanka’s eastern coast, is an iconic bridge that connects the vibrant town with its surrounding areas. Built in 1924 during British colonial rule, this historic structure holds both architectural and cultural significance, making it a landmark of the region.
                Stretching gracefully across the Batticaloa Lagoon, Kalladi Palama offers picturesque views of tranquil waters and the lush greenery that surrounds it. Originally constructed with steel and concrete, the bridge was designed to support vehicles and pedestrians, serving as a critical link for transportation and trade. Over the years, it has undergone renovations to accommodate modern demands while retaining its historical charm.
                The bridge is also steeped in local folklore, often associated with legends about mermaids and mysterious voices heard from the lagoon. These stories, combined with its natural beauty, make it a point of fascination for both locals and visitors.
                Today, Kalladi Palama stands as a symbol of Batticaloa’s heritage and development. It is a popular spot for sightseeing, photography, and enjoying the serene ambiance of the lagoon. Whether you are exploring history or seeking a scenic experience, Kalladi Palama is a must-visit destination on Sri Lanka’s east coast.",
                'category' => 'Historical',
                'location' => 'crosses the Batticaloa Lagoon at Batticaloa.',
                'district' => 'Batticaloa',
                'photo' => 'photos/Kallady_Bridge_Batticaloa.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 81.6439495036262,
                'latitude' => 7.989925017773253
            ]);

            Place::create([
         
                'name' => 'Batticaloa Fort',
                'description' => "Batticaloa Fort, located on the eastern coast of Sri Lanka, is a historic landmark that tells the story of the island's colonial past. Built by the Portuguese in 1628, the fort was later captured by the Dutch in 1638 and then the British in 1745, reflecting its strategic importance in maritime trade and defense.
                Situated near the picturesque Batticaloa Lagoon, the fort is surrounded by water on three sides, creating a stunning view for visitors. Its sturdy stone walls, bastions, and moat are well-preserved, showcasing the architectural ingenuity of the colonial era. Inside, remnants of administrative buildings, storage facilities, and barracks offer a glimpse into its historic role as a military and administrative center.
                The fort is also linked to local folklore, including tales of mysterious voices heard emanating from the lagoon, adding an element of mystique to its charm. Today, it houses government offices, but its historical and cultural significance continues to attract tourists and history enthusiasts.",
                'category' => 'Urban',
                'location' => 'located in Central Batticaloa',
                'district' => 'Batticaloa',
                'photo' => 'photos/the-batticaloa-fort-is-the-old-portuguese-fort-in-the-center-of-batticaloa-city-sri-lanka-2C62G29.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 81.70219909769254,
                'latitude' => 7.712142177970481
            ]);

            Place::create([

                'name' => 'Kuruvita Batadobalena',
                'description' => "Kuruvita Batadobalena, located in the Sabaragamuwa province of Sri Lanka, is a fascinating archaeological site that blends historical, cultural, and natural beauty. Nestled amidst lush greenery and tranquil landscapes, Batadobalena is an ancient cave complex known for its significance in Sri Lanka’s early Buddhist history.
                The cave system, which is believed to date back to the Anuradhapura period, features a series of rock shelters, some of which were used as monastic dwellings and meditation sites by Buddhist monks. Inside the caves, visitors can find ancient rock inscriptions written in Brahmi script, providing valuable insights into the island’s early history and the spread of Buddhism. The caves are also adorned with remnants of early Buddhist art and religious symbols.
                Batadobalena is surrounded by a serene environment, with the natural beauty of the area adding to its appeal. The site is an ideal location for those interested in both history and nature, offering a peaceful atmosphere for reflection and exploration.
                Today, Kuruvita Batadobalena is a protected archaeological site that remains largely untouched, preserving its historical and spiritual significance. It offers a unique glimpse into Sri Lanka’s ancient Buddhist culture and serves as a quiet, awe-inspiring destination for travelers seeking to explore the island’s rich heritage.",
                'category' => 'Archeological',
                'location' => 'in the Ratnapura District of Sabaragamuwa Province of Sri Lanka. It is 87 km from Colombo.',
                'district' => 'Ratnapura',
                'photo' => 'photos/batadomba-lena-dsc-0048-900_orig.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.39599221117855,
                'latitude' => 6.776762186375918
            ]);

            Place::create([

                'name' => 'Saman devalaya',
                'description' => "Saman Devalaya, located in the town of Ratnapura in Sri Lanka, is one of the most revered Hindu temples on the island, dedicated to God Saman, the guardian deity of the Sabaragamuwa Province. This temple holds great religious and cultural significance for both Buddhists and Hindus in the region.
                The origins of Saman Devalaya are believed to date back to the 18th century, though it has likely existed in some form since ancient times. The temple is known for its unique blend of Hindu and Buddhist architectural styles, with the main shrine housing the deity Saman, who is believed to protect the local people and bless them with prosperity and health.
                Every year, the temple hosts the famous Saman Devale Perahera, a grand procession that attracts thousands of devotees. The event is marked by vibrant displays of traditional drumming, dancing, and the majestic sight of decorated elephants.
                Visitors to Saman Devalaya can immerse themselves in the temple’s serene atmosphere and explore the sacred grounds, which include beautifully maintained gardens and shrines. It is a symbol of Sri Lanka’s rich cultural and religious diversity, offering a deep spiritual experience for all who visit",
                'category' => 'Historical',
                'location' => 'Ratnapura, Sri Lanka',
                'district' => 'Ratnapura',
                'photo' => 'photos/Maha-Saman-Devalaya-1.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.37992548234173,
                'latitude' => 6.69076414332158
            ]);

            Place::create([

                'name' => 'Maduwanwila walawwa',
                'description' => "Maduwanwila Walawwa, located in the Ratnapura district of Sri Lanka, is an elegant colonial-era mansion that offers a fascinating look into the island’s rich history and heritage. Built in the 19th century, this well-preserved structure was once the residence of an influential aristocratic family in the region, showcasing the grandeur and lifestyle of the period.
                The architectural style of Maduwanwila Walawwa reflects traditional Sri Lankan colonial design, with its distinctive blend of Western and local elements. The mansion is surrounded by lush gardens, adding to its serene and picturesque charm. The building itself features spacious verandas, intricate wooden carvings, and a large central courtyard, which highlight the craftsmanship of the era.
                Maduwanwila Walawwa also holds historical significance as a site of social and political importance during colonial rule. It served as a center for local governance and played a role in shaping the cultural landscape of the region.
                Today, Maduwanwila Walawwa is a popular heritage site, offering visitors a chance to explore Sri Lanka’s colonial past. The walawwa is not only an architectural marvel but also an important cultural landmark, making it a must-visit for those interested in the island’s history and heritage.",
                'category' => 'Urban',
                'location' => 'town of Maduwanwela, which lies between Embilipitiya and Rakwana',
                'district' => 'Ratnapura',
                'photo' => 'photos/Royal_Palace_Maduwanwela_Walawwa_-_මඩුවන්වෙල_වලව්ව_2012_-_panoramio.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.70360036699492,
                'latitude' => 6.389369275347484
            ]);

            Place::create([
   
                'name' => 'Pahaiyangala (Bulathsinhala)',
                'description' => "Pahaiyangala, also known as Bulathsinhala, is an ancient archaeological and historical site located in the Kalutara district of Sri Lanka. Famous for its impressive cave complex, Pahaiyangala is considered one of the largest and most important cave sites in the country, with a history dating back over 20,000 years.
                The site is home to several caves that were once used by early humans, with archaeological evidence suggesting that Pahaiyangala was inhabited during the prehistoric period. The caves contain tools, pottery, and skeletal remains, offering valuable insights into the early inhabitants of Sri Lanka. These discoveries highlight the region's significance as a center of early human civilization.
                In addition to its prehistoric importance, Pahaiyangala has Buddhist connections. It is believed that the caves were later used by Buddhist monks as meditation retreats during the Anuradhapura period. The site also features rock inscriptions and ruins of ancient structures, further emphasizing its spiritual and historical relevance.
                Today, Pahaiyangala is a protected archaeological site, attracting tourists and researchers interested in Sri Lanka's ancient history and cultural heritage. Its unique blend of natural beauty, historical significance, and cultural heritage makes it a fascinating destination for those exploring Sri Lanka’s past.",
                'category' => 'Archeological',
                'location' => 'Pahiyangala caves lie in Yatagampitiya',
                'district' => 'Kalutara',
                'photo' => 'photos/pahiyangala-01.webp',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.21624543023296,
                'latitude' => 6.648963858491289
            ]);

            Place::create([
 
                'name' => 'pulinatalarama viharaya',
                'description' => "pulinatalarama viharaya, located in the Kalutara district of Sri Lanka, is an ancient Buddhist temple steeped in history and cultural significance. Although lesser-known, this site holds an important place in the island’s Buddhist heritage, offering a glimpse into the architectural and spiritual traditions of the past.
                The temple is believed to date back to the Anuradhapura period, making it one of the oldest historical sites in the region. Palina Nuwara Viharaya was once a thriving religious center, serving as a place of worship and learning for Buddhist monks. The site features remnants of ancient stupas, stone pillars, and inscriptions, many of which are still visible despite the passage of time.
                Nestled amidst a serene natural environment, the temple’s location adds to its tranquility, making it an ideal destination for meditation and reflection. Archaeological excavations at the site have uncovered artifacts that shed light on the craftsmanship and spiritual practices of ancient Sri Lanka.
                Today, Palina Nuwara Viharaya is a hidden gem awaiting exploration. It appeals to history enthusiasts, archaeologists, and spiritual seekers alike, offering an opportunity to connect with Sri Lanka’s rich cultural and religious heritage in a peaceful setting.",
                'category' => 'Historical',
                'location' => 'situated in Kalutara-North, Sri Lanka.',
                'district' => 'Kalutara',
                'photo' => 'photos/Kalutara Pulinatalaramaya.webp',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 79.94786641576204,
                'latitude' => 6.612387316573414,
            ]);

            Place::create([

                'name' => 'Richman castle',
                'description' => "Richmond Castle, located in Kalutara, Sri Lanka, is a stunning example of colonial architecture and an enduring symbol of a bygone era. Built in 1896 by Mudaliyar Nanayakkara Rajawasala Appuhamilage Don Arthur de Silva Wijesinghe Siriwardena, a wealthy landowner and aristocrat, the castle is a blend of Indian and British architectural styles.
                This two-story mansion features 16 elegantly designed rooms, a grand ballroom, and intricate wooden carvings that showcase the craftsmanship of the time. The castle’s expansive gardens, adorned with tropical plants and fruit trees, add to its charm, creating a serene and picturesque setting. The design incorporates natural ventilation and lighting, reflecting the ingenuity of its builders.
                Richmond Castle was originally constructed as a residence for the Mudaliyar and his wife, with the intention of entertaining dignitaries and hosting grand social events. However, the couple’s lack of heirs and their eventual separation led to the property being donated to the public.
                Today, Richmond Castle is a heritage site managed by the Kalutara District Secretariat. Visitors can explore its majestic interiors, learn about its history, and appreciate its architectural brilliance. The castle stands as a cultural and historical treasure, offering a glimpse into Sri Lanka’s colonial past.",
                'category' => 'Urban',
                'location' => 'Richmond Castle, Kalutara ; Kalutara · Sri Lanka',
                'district' => 'Kalutara',
                'photo' => 'photos/richmond-castle-kalutara-attractions.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 79.97524899397743,
                'latitude' => 6.601670028086395
            ]);

            Place::create([
 
                'name' => 'Karagampitiya Subodharamaya',
                'description' => "Karagampitiya Subodharamaya, located in Dehiwala, Sri Lanka, is a historic Buddhist temple renowned for its spiritual significance and cultural heritage. Founded in the late 19th century, the temple has become a revered place of worship and a symbol of devotion for the local Buddhist community.
                The temple is known for its serene ambiance, making it an ideal destination for meditation and spiritual reflection. Its architecture blends traditional Sri Lankan design with elements of colonial influence, showcasing ornate carvings, colorful murals, and intricately designed stupas. The temple grounds are beautifully landscaped, with lush greenery and tranquil spaces that add to its peaceful atmosphere.
                One of the key attractions at Karagampitiya Subodharamaya is its collection of exquisite Buddhist artifacts, including statues, ancient manuscripts, and relics. The temple also hosts regular religious ceremonies, Dhamma sermons, and meditation sessions, attracting devotees and visitors seeking spiritual guidance.
                Subodharamaya has played a pivotal role in promoting Buddhism and preserving Sri Lanka’s religious traditions. Today, it stands as a cultural and spiritual landmark in Dehiwala, offering a serene retreat for those seeking solace and a deeper understanding of the island’s Buddhist heritage.",
                'category' => 'Archeological',
                'location' => 'located at the Dehiwala junction on the Colombo-Galle main road, about 9 miles south of Colombo city.',
                'district' => 'Colombo',
                'photo' => 'photos/sri-subodharama_viharaya06.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 79.86802863395486,
                'latitude' => 6.8493170898193005
            ]);

            Place::create([

                'name' => 'Dutch hospital',
                'description' => "The Dutch Hospital in Colombo, located in the heart of the city near the iconic World Trade Center, is a historic building that has been transformed into a bustling shopping and dining precinct. Believed to have been built in the late 17th century during the Dutch colonial period, it is one of the oldest buildings in Colombo, showcasing Dutch architectural influence.
                Originally established as a hospital to treat Dutch East India Company officers and soldiers, the building’s thick walls, high ceilings, and large windows were designed to ensure ventilation and keep the interior cool in Colombo’s tropical climate. The structure's sturdy design has withstood centuries, including wars and changes in governance.
                In recent years, the Dutch Hospital has been meticulously restored and repurposed as a modern lifestyle complex. It now houses high-end restaurants, cafes, boutiques, and souvenir shops, making it a popular spot for both locals and tourists. The open courtyards, colonial charm, and vibrant atmosphere create a unique blend of history and modernity.
                Visiting the Dutch Hospital offers not only a chance to experience its historical significance but also an opportunity to enjoy fine dining, shopping, and live entertainment in one of Colombo’s most charming landmarks.",
                'category' => 'Urban',
                'location' => 'Old Dutch Hospital Complex Echelon Square Hospital Street, Colombo',
                'district' => 'Colombo',
                'photo' => 'photos/Dutch_Hospital.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 79.84444702812563,
                'latitude' => 6.933508594576917
            ]);

            Place::create([
            
                'name' => 'Varana Raja Maha Viharaya',
                'description' => "Varana Raja Maha Viharaya, located in the Gampaha District of Sri Lanka, is an ancient Buddhist temple renowned for its historical, cultural, and spiritual significance. Perched on a rocky hill surrounded by lush greenery, the temple is believed to have been established during the reign of King Walagamba in the 1st century BCE.
                The temple is divided into three levels, with each tier offering unique features and attractions. The lower level houses a modern shrine and monastic buildings, while the mid-level and upper tiers are where the historical significance is most evident. These levels feature ancient cave shelters, which were once used by Buddhist monks for meditation and residence. The caves contain centuries-old murals, inscriptions, and Buddha statues, showcasing the artistic and spiritual heritage of the Anuradhapura and later periods.
                The panoramic views from the uppermost level of the temple are breathtaking, offering a serene environment ideal for meditation and reflection. The temple also serves as an active place of worship, hosting religious ceremonies and attracting devotees from across the region.
                Varana Raja Maha Viharaya is a hidden gem that combines history, spirituality, and natural beauty, making it a must-visit destination for anyone exploring Sri Lanka’s cultural and religious landmarks.",
                'category' => 'Archeological',
                'location' => 'situated in Thihariya, Gampaha District, Sri Lanka',
                'district' => 'Gampaha',
                'photo' => 'photos/Varana Viharaya - Lankapradeepa.webp',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.07437689583448,
                'latitude' => 7.102505976615165
            ]);

            Place::create([
                
                'name' => 'Asmadala Cave',
                'description' => "Asmadala Cave, located in the picturesque landscapes of Sri Lanka, is an archaeological and historical treasure that offers a glimpse into the island’s prehistoric and spiritual past. Tucked away in a serene setting, this natural rock formation served as a significant site for ancient human habitation and later as a Buddhist retreat.
                The cave is believed to have been inhabited during the prehistoric period, with archaeological evidence such as tools and pottery fragments discovered in its vicinity. These findings provide insight into the lives of Sri Lanka’s early settlers, showcasing their ingenuity and resourcefulness.
                During the Anuradhapura period, the Asmadala Cave transformed into a Buddhist meditation site. Monks used the cave as a peaceful retreat, taking advantage of its seclusion and natural beauty. Remnants of ancient inscriptions and religious artifacts can still be seen, highlighting the spiritual importance of the site.
                Today, Asmadala Cave is a destination for history enthusiasts and nature lovers alike. Its tranquil surroundings, combined with its historical and cultural significance, make it an excellent spot for reflection and exploration. Visiting the cave offers a unique opportunity to connect with Sri Lanka’s rich heritage and discover one of its lesser-known archaeological marvels.",
                'category' => 'Historical',
                'location' => 'on the boarder of the Gampaha',
                'district' => 'Gampaha',
                'photo' => 'photos/sddefault.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.10938646294696,
                'latitude' => 6.985980867898978
            ]);

            Place::create([
           
                'name' => 'Pathaka Udugampala',
                'description' => "Pathaka, located in Udugampala in the Gampaha District, is a site of historical and cultural significance in Sri Lanka. Known for its ancient ruins and serene surroundings, Pathaka offers visitors a glimpse into the island's rich heritage and the architectural marvels of its past.
                The site is believed to date back to the early Anuradhapura period, making it a historically significant location. Pathaka is renowned for its ancient temple ruins, including stone pillars, remnants of stupas, and carved stone artifacts. These structures reflect the architectural brilliance and spiritual devotion of the era. Inscriptions found on the site provide valuable insights into the religious and cultural practices of the time.
                Surrounded by lush greenery, Pathaka is not only a site of archaeological interest but also a place of tranquility. The peaceful atmosphere makes it an ideal spot for meditation and reflection, attracting both history enthusiasts and spiritual seekers.
                Despite its historical importance, Pathaka remains relatively undiscovered, offering a quiet retreat for visitors seeking to explore Sri Lanka’s lesser-known landmarks. Its combination of natural beauty and historical significance makes Pathaka a must-visit for those interested in the island’s ancient heritage.",
                'category' => 'Archeological',
                'location' => 'situated in Udugampola, Sri Lanka.',
                'district' => 'Gampaha',
                'photo' => 'photos/Udugampola Pathaha - Lankapradeepa.JPG',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 79.98317110426922,
                'latitude' => 7.133567460528692
            ]);

            Place::create([
        
                'name' => 'Elephant pass',
                'description' => "Elephant Pass, located at the narrowest point of the Jaffna Peninsula in northern Sri Lanka, is a historically significant location known for its strategic importance and natural beauty. It serves as a critical point connecting the Jaffna Peninsula with the rest of the island, making it a vital route for transportation and communication.
                The pass gets its name from the presence of elephants in the area during ancient times. Over the centuries, it has witnessed numerous historical events, particularly during the Sri Lankan Civil War. The area was a focal point of military conflict due to its strategic location, with both government forces and Tamil Tiger rebels battling for control over it. The site is still marked by remnants of military structures and memorials that stand as reminders of the past.
                In addition to its historical significance, Elephant Pass is surrounded by natural beauty, including marshes and wetlands, which make it an important area for biodiversity. The surrounding landscape also features mangrove forests, making it a serene destination for nature enthusiasts.
                Today, Elephant Pass remains a symbol of Sri Lanka’s complex history while also representing the country’s resilience and hope for peace and prosperity in the future.",
                'category' => 'Historical',
                'location' => 'located at the gateway of the Jaffna Peninsula in Northern Province, Sri Lanka',
                'district' => 'Kilinochchi',
                'photo' => 'photos/elephant-pass-900_orig.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.4063710622794,
                'latitude' => 9.50688361993551
            ]);

            Place::create([

                'name' => 'Pooneryn fort',
                'description' => "Pooneryn fort, located in the Northern Province of Sri Lanka, is a historic fortification with deep cultural and military significance. Situated near the coastal region of the Jaffna Peninsula, the fort was originally built by the Portuguese in the 17th century as part of their colonial expansion in Sri Lanka.
                The fort was constructed to protect the northern coastline and maintain control over the surrounding areas during the colonial period. It is a prime example of Portuguese military architecture, with thick stone walls, a strategic location overlooking the sea, and defensive structures designed to withstand external attacks. Over time, the fort was captured and modified by the Dutch, further enhancing its significance in Sri Lanka’s colonial history.
                Punarin Fort has witnessed numerous historical events, including conflicts between colonial powers and local resistance. Despite its historical role, the fort fell into neglect after the end of colonial rule, and it became a largely forgotten site for many years.
                Today, Punarin Fort is a historical landmark, attracting visitors who are interested in Sri Lanka's colonial past and military history. Although much of the structure remains in ruins, the fort offers a unique glimpse into the island’s tumultuous history and the enduring legacy of the colonial era.",
                'category' => 'Urban',
                'location' => 'located in Pooneryn, adjacent to the Jaffna Peninsula.',
                'district' => 'Kilinochchi',
                'photo' => 'photos/925689731.webp',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.21209359585022,
                'latitude' => 9.50359773031695
            ]);

            Place::create([

                'name' => 'Pusulpitiya Raja Maha Viharaya',
                'description' => "Pusulpitiya Raja Maha Viharaya, located in the scenic village of Pusulpitiya in the Kandy District, is a revered Buddhist temple with a rich historical and spiritual heritage. Believed to have been established during the reign of King Walagamba in the 1st century BCE, the temple is closely associated with the sacred Tooth Relic of the Buddha.
                According to historical records, Pusulpitiya Raja Maha Viharaya was one of the locations where the Tooth Relic was hidden to protect it from invaders. This association enhances the temple’s sanctity, making it an important pilgrimage site for Buddhists.
                The temple’s architecture reflects its antiquity, featuring traditional Sri Lankan design elements, including stone carvings, ancient stupas, and wooden structures. The interiors are adorned with murals and statues that narrate the life of the Buddha and the history of Buddhism in Sri Lanka.
                Nestled amidst lush greenery and rolling hills, the temple provides a serene and tranquil environment ideal for meditation and spiritual reflection. Visitors can also explore the nearby Pusulpitiya village, which offers a glimpse into the region’s rural charm and cultural traditions.
                Pusulpitiya Raja Maha Viharaya is not just a place of worship but a testament to Sri Lanka’s enduring Buddhist heritage and its historical significance.",
                'category' => 'Archeological',
                'location' => 'located in Pusulpitiya village, Nuwara Eliya District, Sri Lanka',
                'district' => 'Nuwara Eliya',
                'photo' => 'photos/IMG_5967.webp',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.64840326117984,
                'latitude' => 7.055738527913401
            ]);

            Place::create([
 
                'name' => 'Dehanda Kadulla',
                'description' => "Dehanda Kadulla, located near Mahiyanganaya in Sri Lanka, is a place steeped in legend and historical significance. It is closely associated with the story of King Dutugemunu, one of the most celebrated monarchs in Sri Lankan history, who unified the island under a single rule during the Anuradhapura period.
                According to folklore, it was at Dehanda Kadulla that King Dutugemunu received divine intervention before his historic battle against King Elara. Legend has it that a deity presented him with a sacred sword at this location, symbolizing divine support for his mission to restore Buddhism and unify the island. This legendary event has elevated Dehanda Kadulla to a sacred and revered site.
                The area is marked by a peaceful ambiance, with lush greenery and tranquil surroundings that attract both devotees and history enthusiasts. Many visitors come to pay homage, meditate, and reflect on the spiritual and cultural significance of the site.
                Dehanda Kadulla stands as a symbol of Sri Lanka’s rich history and the enduring legacy of its great kings. For those exploring the Mahiyanganaya region, this site offers a fascinating blend of history, legend, and spirituality, making it a must-visit destination",
                'category' => 'Historical',
                'location' => 'situated in Kadadora village in the Nuwara Eliya district.',
                'district' => 'Nuwara Eliya',
                'photo' => 'photos/Dehadu Kadulla - Lankapradeepa.JPG',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.60189448038534,
                'latitude' => 7.064807164258875
            ]);

            Place::create([

                'name' => 'Presidents House',
                'description' => "The President’s House in Nuwara Eliya, located in Sri Lanka’s central highlands, is a historically significant landmark that reflects the colonial heritage and natural charm of the region. Once known as the Queen’s Cottage during British rule, this grand residence was built to serve as a holiday retreat for colonial governors seeking respite from the tropical heat.
                Situated amidst the cool climate and lush greenery of Nuwara Eliya, the President’s House is an architectural marvel blending British colonial design with elements of Sri Lankan culture. The expansive gardens, manicured lawns, and surrounding tea estates add to its picturesque allure, making it a standout feature of the area.
                After Sri Lanka gained independence, the property was renamed the President’s House and became a part of the official residences of the country’s leaders. Today, it serves as a retreat for the President during visits to the central highlands and is occasionally opened to the public during special events.
                The President’s House is a symbol of the historical evolution of Nuwara Eliya, from a colonial hill station to a vibrant tourist destination. Its timeless charm and historical significance make it a must-see attraction for visitors exploring the scenic landscapes of Sri Lanka’s hill country.",
                'category' => 'Urban',
                'location' => 'near Nuwara Eliya, Sri Lanka.',
                'district' => 'Nuwara Eliya',
                'photo' => 'photos/President-House.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.76252404187053,
                'latitude' => 6.976344783522834
            ]);

            Place::create([

                'name' => 'Puthalama Lunu Lewaya',
                'description' => "Puttalam Lunu Lewaya, located in the Puttalam District of Sri Lanka, is one of the country’s largest salt pans. Spanning thousands of acres, this vast saline expanse is a unique geographical feature and plays a critical role in Sri Lanka's salt production. The name Lunu Lewaya translates to Salt Lagoon, aptly describing this striking landscape.
                The salt pan is not only a hub of economic activity but also a place of immense natural beauty. The area transforms with the seasons, with shimmering salt crystals creating an almost surreal scenery during the dry months. Workers can be seen harvesting salt by hand, a traditional process that has been passed down for generations, contributing to the livelihood of the local community.
                Beyond its economic value, Puttalam Lunu Lewaya is also an ecological treasure. It serves as a habitat for various bird species, including flamingos, pelicans, and other migratory birds, making it a popular spot for birdwatching. The lagoon's unique ecosystem supports marine and wetland biodiversity, adding to its environmental importance.
                Visiting Puttalam Lunu Lewaya offers an opportunity to witness the harmonious blend of industry, nature, and tradition, making it a fascinating destination for travelers exploring Sri Lanka’s coastal wonders.",
                'category' => 'Historical',
                'location' => 'Puttalam District, western Sri Lanka.',
                'district' => 'Puttalam',
                'photo' => 'photos/putalm_salt_plant1.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 79.82236862653106,
                'latitude' => 8.064505601261278
            ]);

            Place::create([
         
                'name' => 'Puthalam Fort',
                'description' => "Puttalam Fort, located in the coastal town of Puttalam in Sri Lanka, is a historical site that speaks to the island’s colonial past. Originally built by the Portuguese in the 16th century, the fort was a strategic stronghold for controlling the western coastal trade routes.
                The fort was later taken over and modified by the Dutch in the 17th century, who strengthened its defenses and used it as a base for trade and military operations. The design of the fort reflects typical colonial military architecture, with thick walls, bastions, and a compact layout that optimized defense against enemy attacks.
                Although much of the fort is now in ruins, some sections of the original walls and foundations still stand, offering a glimpse into its former grandeur. The fort's location near the lagoon adds to its charm, with scenic views of the water and surrounding mangroves.
                Puttalam Fort holds significant historical value as a reminder of Sri Lanka’s encounters with European colonial powers and their influence on the island’s culture and trade. Visitors to Puttalam can explore this lesser-known landmark, appreciating its historical significance and the stories it holds about Sri Lanka’s rich past.",
                'category' => 'Urban',
                'location' => 'end of the city limits of Kalpitiya',
                'district' => 'Puttalam',
                'photo' => 'photos/5495488087431af32265aaaaa1b8a274541d70555aa4d7c01d8d0fed27e7c152.jpeg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 79.76305551574123,
                'latitude' => 8.278073900740269
            ]);

            Place::create([
     
                'name' => 'Paduwas Nuwara',
                'description' => "Paduwasnuwara, located in the Kurunegala District of Sri Lanka, is a historically significant site that dates back to the 12th century. It served as a temporary capital during the reign of King Parakramabahu I, offering insight into the island’s rich cultural and architectural heritage.
                This ancient city is renowned for its archaeological remains, which include the ruins of a royal palace, monasteries, stupas, and other structures that reflect the advanced engineering and artistic skills of the time. The Dalada Maligawa (Temple of the Tooth Relic) in Paduwasnuwara is of particular importance, as it was once believed to have housed the sacred Tooth Relic of the Buddha before it was moved to its permanent home in Kandy.
                The site also features ancient inscriptions and stone carvings that provide valuable information about Sri Lanka’s history, religion, and social structure during the Polonnaruwa period. Surrounded by lush greenery, Paduwasnuwara offers a serene environment for visitors to explore its historical significance.
                Today, Paduwasnuwara stands as a testament to the ingenuity and spiritual devotion of Sri Lanka’s ancient civilizations. It is a must-visit destination for history enthusiasts and those seeking to connect with the island’s remarkable past",
                'category' => 'Archeological',
                'location' => 'ancient capital, situated in Kurunegala District, Sri Lanka',
                'district' => 'Kurunegala',
                'photo' => 'photos/kings-palace-panduwasnuwara-sri-lanka-600w-685047133.webp',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.10215689281907,
                'latitude' => 7.615883764144422
            ]);

            Place::create([
   
                'name' => 'Galebandara Dewalaya',
                'description' => "Galebandara Devalaya, located in the Kurunegala District of Sri Lanka, is a revered shrine dedicated to Galebandara Deviyo, a regional deity deeply respected by the local community. This shrine holds a significant place in the cultural and spiritual landscape of the area, attracting devotees from all over the country.
                According to local folklore, Galebandara Deviyo was a warrior chieftain known for his bravery and benevolence, who later became deified as a guardian deity. The shrine stands as a place where devotees seek blessings for protection, prosperity, and healing. Rituals and offerings are commonly made, with special ceremonies held during auspicious times to honor the deity.
                The architecture of Galebandara Devalaya combines traditional Sri Lankan styles with elements specific to regional devotional practices. The surroundings, marked by scenic beauty and tranquility, add to the spiritual atmosphere of the shrine.
                The devalaya plays a central role in the cultural identity of the region, hosting annual festivals that feature vibrant processions, drumming, and traditional dance performances. These events draw large crowds, fostering a sense of community and continuity of ancient traditions.
                For visitors, Galebandara Devalaya offers a glimpse into Sri Lanka’s rich heritage of folk deities and the enduring spiritual practices of its people.",
                'category' => 'Historical',
                'location' => 'Kurunegala, Sri Lanka',
                'district' => 'Kurunegala',
                'photo' => 'photos/galebandara-02.webp',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.36736628049093,
                'latitude' => 7.487974452705252
            ]);

            Place::create([

                'name' => 'Kurunegala Old city',
                'description' => "Kurunegala Old City, nestled in the North Western Province of Sri Lanka, is a treasure trove of historical and cultural landmarks. Known as the ancient capital of the Kingdom of Kurunegala during the 13th century, the city served as a vital center of administration and trade.
                The Old City is renowned for its historical sites, including the iconic Ethugala, or “Elephant Rock,” which towers over the city and offers breathtaking views. The rock is deeply tied to local folklore and adds to the region's charm. Nearby, remnants of the royal palace and ancient temples provide insights into the architectural and cultural achievements of the era.
                Kurunegala Old City is also home to a variety of sacred sites, such as ancient Buddhist temples, including the Ridi Viharaya (Silver Temple), known for its intricate carvings and historical significance. These monuments reflect the city's rich heritage and its role in fostering Buddhism.
                Today, Kurunegala Old City serves as a vibrant blend of history and modernity. Visitors can explore its historical treasures while experiencing the warm hospitality and bustling life of the modern town. It stands as a testament to Sri Lanka’s enduring legacy, offering a captivating journey into the island’s past.",
                'category' => 'Urban',
                'location' => 'capital city of the North Western Province and the  Kurunegala District.',
                'district' => 'Kurunegala',
                'photo' => 'photos/kurunegala-city_orig.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.35454479094795,
                'latitude' => 7.519628743499204
            ]);

            Place::create([

                'name' => 'Kosgala Ulapatha',
                'description' => "Kosgala Ulapatha, located in the picturesque region of Sri Lanka, is a hidden gem known for its natural beauty and tranquil environment. This breathtaking waterfall, tucked away amidst lush greenery and rolling hills, is a favorite destination for nature lovers and adventure seekers.
                The Ulapatha stream cascades gracefully down rocky terrain, forming a series of pools and creating a serene atmosphere. The surrounding area is rich in biodiversity, with a variety of flora and fauna thriving in the pristine ecosystem. The gentle sound of flowing water combined with the chirping of birds makes Kosgala Ulapatha an ideal spot for relaxation and rejuvenation.
                In addition to its natural beauty, Kosgala Ulapatha holds cultural and historical significance. Local folklore often connects the site to ancient legends, adding a layer of mystique to its charm. The area is also popular among hikers and photographers, who are drawn to its unspoiled landscapes and stunning vistas.
                Visitors to Kosgala Ulapatha can enjoy a refreshing dip in the cool waters, explore nearby trails, or simply bask in the serenity of nature. This enchanting destination is a testament to Sri Lanka’s rich natural heritage and a must-visit for those seeking peace and adventure.",
                'category' => 'Archeological',
                'location' => 'Kaduruwela – Manampitiya',
                'district' => 'Kurunegala',
                'photo' => 'photos/dimbulagala-082.webp',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 81.13621115351134,
                'latitude' => 7.864016179316209,
            ]);

            Place::create([
                'name' => 'Marawidiya Namal Pokuna',
                'description' => "Marawidiya Namal Pokuna, located in the Anuradhapura District of Sri Lanka, is an ancient reservoir that holds great historical and cultural significance. Dating back to the 4th century BCE, this remarkable water tank is attributed to King Dhatusena, who is believed to have constructed it during his reign to serve as a vital water source for the region.
                The reservoir is known for its large size and intricate design, reflecting the advanced engineering skills of ancient Sri Lankan civilization. The tank is surrounded by a series of well-maintained stone walls and steps, which add to its architectural beauty. It was primarily used for irrigation, playing a key role in supporting agricultural activities in the area, especially rice cultivation.
                Namal Pokuna is also a site of great archaeological interest, with remnants of ancient structures, including stone inscriptions and statues, scattered around the area. These historical artifacts offer valuable insights into the cultural and religious practices of ancient Sri Lanka.
                Today, Marawidiya Namal Pokuna is a serene and tranquil spot, attracting visitors who wish to explore the island’s rich history and marvel at the engineering feats of the past. The site stands as a testament to the ingenuity and legacy of Sri Lanka’s ancient water management systems.",
                'category' => 'Historical',
                'location' => 'situated near the famous Dimbulagala Viharaya in Polonnaruwa',
                'district' => 'Polonnaruwa',
                'photo' => 'photos/cctsrilanka.com-Pasikuda-Polonnaruwa-Dimbulagala-Archaeological-Site-13.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 81.12647677813065,
                'latitude' => 7.872325193717079,
            ]);

            Place::create([
                'name' => 'Polonnaruwa City',
                'description' => "Polonnaruwa, located in the North Central Province of Sri Lanka, is one of the island's most historically significant cities. Once the capital of Sri Lanka during the 11th and 12th centuries, Polonnaruwa is a UNESCO World Heritage site renowned for its well-preserved ancient structures, showcasing the grandeur of Sri Lanka’s medieval period.
                The city is home to impressive archaeological ruins, including the Royal Palace, which once served as the residence of King Parakramabahu I, a powerful ruler who unified Sri Lanka and initiated large-scale infrastructure projects. The remains of his palace and other royal buildings, like the Council Chamber, provide insight into the city’s political and cultural importance.
                Polonnaruwa is also known for its religious sites, such as the famous Gal Vihara, which houses stunning rock-carved Buddha statues, and the Parakrama Samudra, a vast reservoir built to support agriculture in the region. The intricate stonework and elaborate architecture reflect the island's mastery of art and engineering during the period.
                Today, Polonnaruwa stands as an open-air museum, offering visitors the chance to walk through history, exploring ancient temples, palaces, and other monuments. It serves as a testament to Sri Lanka’s rich heritage and enduring cultural legacy.",
                'category' => 'Urban',
                'location' => 'North Western Province of Sri Lanka',
                'district' => 'Polonnaruwa',
                'photo' => 'photos/polonnaruwa05_orig.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 81.00023387512374,
                'latitude' => 7.946915269669554,
            ]);

            Place::create([
                'name' => 'Beligala Archaeological Temple',
                'description' => "The Beligala Archaeological Temple, located in the Matale District of Sri Lanka, is a significant historical and cultural site that offers a glimpse into the island’s ancient Buddhist heritage. The temple, believed to have been established during the reign of King Parakramabahu I in the 12th century, is situated amidst lush greenery and serene landscapes, making it an ideal destination for both history enthusiasts and nature lovers.
                The temple is known for its well-preserved ruins, including rock carvings, inscriptions, and ancient stupas. These remnants highlight the advanced architectural and artistic achievements of the time. The Beligala Temple is especially famous for its cave shrine, which houses several statues of the Buddha, beautifully carved into the rock. These statues are thought to have been created to commemorate the spread of Buddhism in the region.
                The temple’s serene surroundings, with dense forests and distant mountain views, create a peaceful atmosphere, making it a perfect spot for meditation and reflection. The Beligala Temple also holds great religious significance for the local Buddhist community, and it continues to be a place of worship and pilgrimage.
                Visiting the Beligala Archaeological Temple offers an opportunity to connect with Sri Lanka’s ancient Buddhist history, while also enjoying the tranquility and natural beauty of the area.",
                'category' => 'Archeological',
                'location' => 'Temple of the Tooth is located in this part of Beligala',
                'district' => 'Kegalle',
                'photo' => 'photos/beligala-rock-116.webp',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.43795782386825,
                'latitude' => 7.062082660894717,
            ]);

            Place::create([
                'name' => 'Dedigama Kotawehera',
                'description' => "Dedigama Kotawehera, located in the Kegalle District of Sri Lanka, is an important historical and religious site. It is known for its ancient stupa, which dates back to the reign of King Vijayabahu I, who ruled in the 11th century. The stupa, situated in the tranquil surroundings of the village of Dedigama, is a prominent feature of the Kotawehera temple complex and holds deep religious significance for the local community.
                The stupa at Dedigama Kotawehera is considered to be one of the oldest and most revered in the region, attracting pilgrims and visitors alike. According to local legend, the stupa was built to enshrine relics of the Buddha, and it is believed to have played a vital role in spreading Buddhism throughout the island. The architectural design of the stupa and the surrounding structures reflect the influence of ancient Sri Lankan Buddhist architecture.
                In addition to the stupa, Dedigama Kotawehera is home to several other important historical artifacts, including inscriptions, statues, and stone carvings that provide valuable insights into the island’s Buddhist heritage and culture.
                Visiting Dedigama Kotawehera offers an opportunity to explore Sri Lanka’s rich religious history, while enjoying the serene beauty of the area.",
                'category' => 'Historical',
                'location' => 'closer to Nelumdeniya in Kegalle district',
                'district' => 'Ampara',
                'photo' => 'photos/Dadigama_Kota_Wehera_04.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.26172615401572,
                'latitude' => 7.208384310690506,
            ]);

            Place::create([
                'name' => 'Kadugannawa Ambalama: A Historical Resting Place',
                'description' => "Kadugannawa Ambalama, located in the Kadugannawa area of the Kandy District, is an ancient wayside rest house that holds historical significance as part of Sri Lanka's cultural heritage. Serving as a traditional resting spot for travelers, Ambalamas were essential in the past, especially along trade routes or during long journeys. Kadugannawa Ambalama was a vital stop for those traveling between Colombo and Kandy, as the area was a key passageway during the colonial era and earlier periods.
                The structure is a simple yet charming example of traditional Sri Lankan architecture. Made from wood, stone, and thatched roofs, it reflects the practical and sustainable building methods of the time. The Kadugannawa Ambalama was designed to provide shelter and rest to weary travelers, offering a place to relax and regain energy before continuing their journey. It is built in a distinctive style, with spacious, open-sided walls that allow natural ventilation, ideal for the warm climate of Sri Lanka.
                Today, the Kadugannawa Ambalama stands as a symbol of the country’s rich history and hospitality culture. It is a reminder of the bygone era when such rest houses were an integral part of Sri Lankan life. Visitors to the site can appreciate both its historical importance and its scenic surroundings.",
                'category' => 'Urban',
                'location' => 'on the left, when traveling from Colombo to Kandy',
                'district' => 'Kegalle',
                'photo' => 'photos/Kadugannawa-Ambalama-1.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.49617675819475,
                'latitude' => 7.261752559109924,
            ]);

            Place::create([
                'name' => 'Madawala Viharaya',
                'description' => "Madawala Viharaya, located in the Kandy District of Sri Lanka, is a peaceful and historically significant Buddhist temple. Situated amidst the lush hills surrounding the central part of the island, it offers a serene atmosphere ideal for reflection and meditation. The temple is not only a religious site but also a place of cultural importance, attracting both local pilgrims and tourists interested in Sri Lanka's spiritual heritage.
                The temple’s origins date back to ancient times, and it is believed to have been a center of Buddhist learning and meditation for many centuries. The temple features a beautiful and tranquil setting, with well-maintained gardens and scenic views of the surrounding countryside. The main structure of the temple is built in traditional Sri Lankan Buddhist architecture, showcasing intricate carvings and beautiful murals depicting the life of the Buddha.
                One of the temple’s key attractions is the Buddha statue and the serene atmosphere it provides for meditation and prayer. The temple also houses relics and historical artifacts that offer valuable insights into the island’s Buddhist heritage.
                Madawala Viharaya is a quiet retreat for anyone looking to experience the spiritual depth and beauty of Sri Lanka’s ancient Buddhist traditions.",
                'category' => 'Archeological',
                'location' => 'Katugastota - Madawala - Bambarella Road, Madawala, Sri Lanka.',
                'district' => 'Kandy',
                'photo' => 'photos/medawala-01.webp',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.56272257281748,
                'latitude' => 7.356034612860082,
            ]);

            Place::create([
                'name' => 'Balana Fort',
                'description' => "Balana Fort, located in the Kurunegala District of Sri Lanka, is a historically significant site that dates back to the colonial period. The fort, which was originally constructed by the Portuguese in the 16th century, served as a strategic military post to control the area and protect against local resistance. It was later expanded and fortified by the Dutch in the 17th century, making it an important defensive structure during their rule in Sri Lanka.
                The fort was built on a hilltop, offering an excellent vantage point to monitor the surrounding areas. The strategic location also made it a key point along the trade routes and a vital base for the European powers controlling the island at the time. Over the years, the fort has been the site of several battles and conflicts, particularly between the colonial powers and the local Sinhalese kingdoms.
                Today, Balana Fort remains a fascinating historical site, with its remnants still visible on the hill. Visitors can explore the ruins of the fortifications, the moat, and the stone walls, which offer a glimpse into Sri Lanka’s colonial past. Surrounded by scenic landscapes, Balana Fort is a reminder of the island’s rich and complex history, making it a worthwhile visit for history enthusiasts.",
                'category' => 'Historical',
                'location' => 'located near the Alagalla Mountain Range, Sri Lanka',
                'district' => 'Kandy',
                'photo' => 'photos/Balana-Fort-1.jpg',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.49563392467178,
                'latitude' => 7.270167914762975,
            ]);

            Place::create([
                'name' => 'Bogambara Prison: A Historical Landmark in Kandy',
                'description' => "Bogambara Prison, located in the heart of Kandy, Sri Lanka, is a significant historical landmark with a deep connection to the country’s colonial past. Built in 1876 during British rule, the prison was designed to hold prisoners from the Kandy District and nearby areas. It became a prominent feature of the region for over a century before its closure in 2014.
                The prison's architecture was typical of colonial-era institutions, featuring high stone walls and a structured layout to ensure strict security. It housed many individuals, including political prisoners, during periods of unrest and rebellion, such as during Sri Lanka's fight for independence. The prison became infamous for its harsh conditions, overcrowding, and difficult living circumstances for the inmates.
                After its closure, the government planned to convert the site into a cultural center or museum to preserve its historical significance. The prison is often remembered for its role in Sri Lanka’s colonial history, and its legacy serves as a reminder of the darker aspects of the country’s past.
                Today, the site of the former Bogambara Prison stands as a reflection of the island’s journey through colonial rule, freedom struggles, and eventual independence. It remains an important piece of Kandy’s history, offering insights into Sri Lanka's colonial era and penal system.",
                'category' => 'Urban',
                'location' => 'Location, Bogambara, Kandy, Central Province, Sri Lanka',
                'district' => 'Kandy',
                'photo' => 'photos/Bogambara.webp',
                'suggested_by' => 2,
                'status' => 'accepted',
                'longitude' => 80.6348455169991,
                'latitude' => 7.291482468020962,
            ]);


    }
}
        
    

