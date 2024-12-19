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
            'photo' => 'photos/IhG7kAHSJjcmWgMadGzpZrNOwVa8gATb4eZ2KEQF.png',
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
            'photo' => 'photos/SAeloqmpkllVPmbz9f0SxFgzqX3xwrXKiim1YtK2.png',
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
            'photo' => 'photos/PqiEcL60sJGVfrlvZweMM8ifJguX1Nunxc2yP1cd.png',
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
            'photo' => 'photos/q10UPBkpLKZngWCLogTEQqCO2e7qdXwgBzfEcNVf.png',
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
            'photo' => 'photos/5mmBEAqIuDAFsq3HN9IKkCWIt5erYsgoZGqQkCAS.png',
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
            'photo' => 'photos/ev7Z1aglTBOjIW3rMT1cBFUPSj9Sb4UpVWBrgwcI.png',
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
            'photo' => 'photos/jYswx86moqaswoMP4unxfn0rvG3keDdh1Tq5QaFo.png',
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
            'photo' => 'photos/bq84KRBJ0FWdZrNHnwnEHWa4tEN6lAgYifYTR8jA.png',
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
            'photo' => 'photos/rmVl3RutjQh5DUmyK8upFuCRk5F5MWCVeJRqXJVS.png',
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
            'photo' => 'photos/HHDSGUn6WU7MXkALrhE2e2WTReiCfTiEBWmsIPj4.png',
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
            'photo' => 'photos/OZQtx0djFbU3LprjVXM41eIhvG7XaA9ynPqjzPSf.png',
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
            'photo' => 'photos/8WuYCX4pFDYrZkDMOSrsGmln3bIeGtUhMrhzyzdI.png',
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
            'photo' => 'photos/8AobFgtY26oeVEEC0oo7YG797cO0eVmPCDe7AbQ1.png',
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
            'photo' => 'photos/iFZwQ5BY7bFjRUV5FbdoM1Q5z4N2sPtayL2sCZlR.png',
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
            'photo' => 'photos/74sfOK2a83OzYsHEVwNm1BNzzHmtwwryz5mgeSG0.png',
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
            'photo' => 'photos/mfOWlcJLHOHVVkGVXusfl6dspxsq3SnI1t5LfCq3.png',
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
            'photo' => 'photos/0MVd1C4s0yXx6xiygHhOVQVJPOqcHjwnfHgl31hW.png',
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
            'photo' => 'photos/8qTFykztccqEklrQCGBTb25GUO4gMGCdhxYX40Et.png',
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
            'photo' => 'photos/e0Fwxmjn1wv5N3J4MqnnF6YwAAAS9XZhvPYI2LzS.png',
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
            'photo' => 'photos/isgaZEuuJ0VRp8fPLFCAcgE0XSpJNt4C865t8lM1.png',
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
            'photo' => 'photos/y0MpoPjM4rKr5XEJawfC9OAI9fLV8UYnsOAGeJUL.png',
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
            'photo' => 'photos/zZC2zMEiG63up0rPDRRqZopWDZPxzh7NPovUpf8C.png',
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
            'photo' => 'photos/Dbjf0wCCj0IrLZD7sVFmzEt41ZQTBQImuDOlGQVv.png',
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
            'photo' => 'photos/co9dsz8kOilUUvIBZQsfDjPUR53LWZelbwqOF4eP.png',
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
            'photo' => 'photos/bUr2c6eOscQ9wX5GSTi7B3zWv4hIL0ieqhSwrXR4.png',
            'suggested_by' => 2,
            'status' => 'accepted',
            'longitude' => 80.0065366916669,
            'latitude' => 9.753978643090278,
        ]);
    }
}
        
    

