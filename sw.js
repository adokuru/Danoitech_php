importScripts(
	"https://storage.googleapis.com/workbox-cdn/releases/4.3.1/workbox-sw.js"
);
const { registerRoute } = workbox.routing;
const { CacheFirst } = workbox.strategies;
const { CacheableResponse } = workbox.cacheableResponse;
const { precacheAndRoute } = workbox.precaching;

precacheAndRoute([
	{
		revision: "bc2756d1edcfb542ecb28dc1a7792ff9",
		url: "/index.html"
	},
	{
		revision: "bc1756d1edcfb542ecb28dc1a7792ff8",
		url: "/offline.html"
	},
	{
		revision: "bc5756d1edcfb542ecb28dc1a7792ff7",
		url: "/404.html"
	},
	{
		revision: "bc4756d1edcfb542ecb28dc1a7792ff3",
		url: "assets/css/all.min.css"
	},
	{
		revision: "4d5b88ab48abe39118ebd4470699ade7",
		url: "assets/css/animate.min.css"
	},
	{
		revision: "d526fe514d37e7840c75bc2e0ca327ca",
		url: "assets/css/bootstrap.min.min.css"
	},
	{
		revision: "ef654d5418827ae8e22c237184c2a015",
		url: "assets/css/default.min.css"
	},
	{
		revision: "d95a07bc8fe46d6d0e72aa9f075f2a8b",
		url: "assets/css/ion.rangeSlider.min.min.css"
	},
	{
		revision: "48572ea29897a0174135efd164296482",
		url: "assets/css/magnific-popup.min.css"
	},
	{
		revision: "269d6a844b4524d98dfe14dde7ce5abd",
		url: "assets/css/nice-select.min.css"
	},
	{
		revision: "022312a8164aad0b3bd4bc355e75a237",
		url: "assets/css/slick.min.css"
	},
	{
		revision: "518e48ec893b6aadf698d7a45e625649",
		url: "assets/css/style.min.css"
	},
	{
		revision: "3bdfbaeb74b5c7622c2fc07bfec4c174",
		url: "assets/fonts/fa-brands-400.eot"
	},
	{
		revision: "15660e8977305a4d77f1b57a00ad35e2",
		url: "assets/fonts/fa-brands-400.html"
	},
	{
		revision: "4005f8899c332f8a2ecfb49f567d3d5d",
		url: "assets/fonts/fa-brands-400.ttf"
	},
	{
		revision: "889855136f55578ad089107285632b37",
		url: "assets/fonts/fa-brands-400.woff"
	},
	{
		revision: "dc83ddbbdd108b159117928063699c4e",
		url: "assets/fonts/fa-brands-400.woff2"
	},
	{
		revision: "3bdfbaeb74b5c7622c2fc07bfec4c174",
		url: "assets/fonts/fa-brands-400d41d.eot"
	},
	{
		revision: "c72987d083289070df1a0f1075cf4061",
		url: "assets/fonts/fa-light-300.eot"
	},
	{
		revision: "3004b3e8a1e48f37e08b20aa887d52bc",
		url: "assets/fonts/fa-light-300.html"
	},
	{
		revision: "1b7d95302d7cbc6a87a773c9d5be58e8",
		url: "assets/fonts/fa-light-300.ttf"
	},
	{
		revision: "a726cedb85b1cfd642eefdf111dec9bf",
		url: "assets/fonts/fa-light-300.woff"
	},
	{
		revision: "6b1c4bcb2a11d69fc64a61f889dfa1d3",
		url: "assets/fonts/fa-light-300.woff2"
	},
	{
		revision: "c72987d083289070df1a0f1075cf4061",
		url: "assets/fonts/fa-light-300d41d.eot"
	},
	{
		revision: "3593cd9504bc12c2a3bc2ae200d0857a",
		url: "assets/fonts/fa-regular-400.eot"
	},
	{
		revision: "31c875f3d9b73ec5894a630f786fc0cd",
		url: "assets/fonts/fa-regular-400.html"
	},
	{
		revision: "e60701577a5df7b92175e2eced183e6e",
		url: "assets/fonts/fa-regular-400.ttf"
	},
	{
		revision: "23458a3f7f740a5490c3937006e6b3fd",
		url: "assets/fonts/fa-regular-400.woff"
	},
	{
		revision: "935ae23ba86e111411100dca037d2f0a",
		url: "assets/fonts/fa-regular-400.woff2"
	},
	{
		revision: "3593cd9504bc12c2a3bc2ae200d0857a",
		url: "assets/fonts/fa-regular-400d41d.eot"
	},
	{
		revision: "6628fa0a2a8a468066e2c7671fb66c86",
		url: "assets/fonts/fa-solid-900.eot"
	},
	{
		revision: "e2b2b9fb9032e091b0d9a3c3f7b2d9a2",
		url: "assets/fonts/fa-solid-900.html"
	},
	{
		revision: "7a24cacaa305b1ca642b878e5ca8f541",
		url: "assets/fonts/fa-solid-900.ttf"
	},
	{
		revision: "ae249d48f7cde3656ea6c710ced852fe",
		url: "assets/fonts/fa-solid-900.woff"
	},
	{
		revision: "525bd4ae5b9eaa1e23b4a5c8b28c0d9f",
		url: "assets/fonts/fa-solid-900.woff2"
	},
	{
		revision: "6628fa0a2a8a468066e2c7671fb66c86",
		url: "assets/fonts/fa-solid-900d41d.eot"
	},
	{
		revision: "6960c5c19735f6dcf12b49990fcf3411",
		url: "assets/images/about-thumb-2.png"
	},
	{
		revision: "31a63e3b3a996215897e6dbfed14810e",
		url: "assets/images/about-thumb.png"
	},
	{
		revision: "5912dec02933fc59be8cc4a86f790d12",
		url: "assets/images/banner-1 - Copy.jpg"
	},
	{
		revision: "d325fe5cfbd5181e36c9c4225c6f0443",
		url: "assets/images/banner-1.jpg"
	},
	{
		revision: "4f82553766c1e3354ba4caa36b272831",
		url: "assets/images/banner-2.1.jpg"
	},
	{
		revision: "e957efd8d733b9a1fbc320c59ba8f5fe",
		url: "assets/images/banner-3-min-1-e1571829912259.jpg"
	},
	{
		revision: "206cc1ca48afa56fc17183f15117519e",
		url: "assets/images/banner-3.1.jpg"
	},
	{
		revision: "2491d8937f5662cdbe02a247afbe9af8",
		url: "assets/images/banner-shape-1.png"
	},
	{
		revision: "3caa47e711313999314e403a3a4ad9b6",
		url: "assets/images/banner-shape-2.png"
	},
	{
		revision: "4251214c6fc8c7063b863945d70bacca",
		url: "assets/images/banner-thumb.png"
	},
	{
		revision: "5b5b0e73494690f65af54fafae5865d1",
		url: "assets/images/barand-1.png"
	},
	{
		revision: "6cd2bf96a4c2e90cb6316b62beae9934",
		url: "assets/images/barand-2.png"
	},
	{
		revision: "0203030d2b6bff09c135c231d6d07ed0",
		url: "assets/images/barand-3.png"
	},
	{
		revision: "27f3cd37c7b75389409c6382098cf46c",
		url: "assets/images/barand-4.png"
	},
	{
		revision: "382043cb2257dbe30e76c5cb313ba3a2",
		url: "assets/images/barand-5.png"
	},
	{
		revision: "b62868f3f66fa7dc73b452807d4b6abb",
		url: "assets/images/barand-6.png"
	},
	{
		revision: "c38972a3a084ecddd0a8170bb709bc48",
		url: "assets/images/barand-7.png"
	},
	{
		revision: "4373ed165b2dac950ce272fe2d13598c",
		url: "assets/images/bussiness-thumb.png"
	},
	{
		revision: "a7255eedfd714a472eb058a349eb6798",
		url: "assets/images/case-1.jpg"
	},
	{
		revision: "b793c7c0d701b75bdc27dd9e3b95268a",
		url: "assets/images/case-10.jpg"
	},
	{
		revision: "70d0e47ac76f6722b70a4851f7672509",
		url: "assets/images/case-11.jpg"
	},
	{
		revision: "72f9fd3c1745ca522865940a593cdbdc",
		url: "assets/images/case-12.jpg"
	},
	{
		revision: "26e403fa9f8497022eb7cd28ff27a6c5",
		url: "assets/images/case-13.jpg"
	},
	{
		revision: "f74af4f93c089784f131bebe6a2de509",
		url: "assets/images/case-14.jpg"
	},
	{
		revision: "fdb18d1c50fd8f01f0d2818896db87ae",
		url: "assets/images/case-15.jpg"
	},
	{
		revision: "bc0165d3c85d7128dded2de6cbe48279",
		url: "assets/images/case-2.jpg"
	},
	{
		revision: "41171eaed047ecd447cb64a18d2e04eb",
		url: "assets/images/case-3.jpg"
	},
	{
		revision: "447d9787f457e10b356f0fb371b54bfc",
		url: "assets/images/case-4.jpg"
	},
	{
		revision: "9465f586da1a6446ee9915849d0dd6ad",
		url: "assets/images/case-5.jpg"
	},
	{
		revision: "f83e3ebf3adf03771310628146ab3eee",
		url: "assets/images/case-6.jpg"
	},
	{
		revision: "59c9da6f1184dea8e8a3fa58a3a7dd38",
		url: "assets/images/case-7.jpg"
	},
	{
		revision: "e81fa814138ba519a3584613ca30e3e9",
		url: "assets/images/case-8.jpg"
	},
	{
		revision: "484fde880f8cdbe6f70d9695f3f8a31f",
		url: "assets/images/case-9.jpg"
	},
	{
		revision: "35226be6877fd545b708b41566bebab3",
		url: "assets/images/case-details-thumb.jpg"
	},
	{
		revision: "cf50ee2ef202fe4d791ed1403dc79917",
		url: "assets/images/case-thumb-1.jpg"
	},
	{
		revision: "a03334a2036b3821a46439a08fc2cb64",
		url: "assets/images/case-thumb-2.jpg"
	},
	{
		revision: "76cd0800c357bd5debe35c0da1d3ef0e",
		url: "assets/images/cat-1.jpg"
	},
	{
		revision: "507696638285e1f1e4f5dd240db5aa04",
		url: "assets/images/cholven-play-bg-2.jpg"
	},
	{
		revision: "2c8b7cb4a44a296584dba268df3be821",
		url: "assets/images/cholven-play-bg.jpg"
	},
	{
		revision: "7df51d93b90a200bfadebbe31939f9d2",
		url: "assets/images/contact-shape-1.png"
	},
	{
		revision: "1c49627fdb5d11a0d76501a6efef1364",
		url: "assets/images/contact-shape-2.png"
	},
	{
		revision: "994a119b73bea757cc6c0f034998e0bd",
		url: "assets/images/contact-thumb.jpg"
	},
	{
		revision: "2b1e642b63b036bc0a27b9d5d9affd7c",
		url: "assets/images/counter-play.jpg"
	},
	{
		revision: "fb57884256106c3ecbf08456a310ec87",
		url: "assets/images/danoitech/128.png"
	},
	{
		revision: "be88e4d686beec9625750ea6c6ec40f4",
		url: "assets/images/danoitech/144.png"
	},
	{
		revision: "299c1807690cc05edd4a38c8660a4e85",
		url: "assets/images/danoitech/152.png"
	},
	{
		revision: "1d38b21f304b417ba2c04dac8cadf001",
		url: "assets/images/danoitech/196.png"
	},
	{
		revision: "46e1a58434f100ee1a92bf22151f4c01",
		url: "assets/images/danoitech/256.png"
	},
	{
		revision: "6d6541c5dfb4e307d3162f390549ffe7",
		url: "assets/images/danoitech/32.png"
	},
	{
		revision: "c1c70fd8600f84d58b313c41d813fd60",
		url: "assets/images/danoitech/512.png"
	},
	{
		revision: "8cea849f33e781be1d973b222996ad1f",
		url: "assets/images/danoitech/android-chrome-96x96.png"
	},
	{
		revision: "9df44884f62096ef1859bc28df5310d7",
		url: "assets/images/danoitech/android-icon-144x144.png"
	},
	{
		revision: "b23c439d1095462447760e98d0406633",
		url: "assets/images/danoitech/android-icon-192x192.png"
	},
	{
		revision: "c5f08a91893b3ef55e40f9fa21798d61",
		url: "assets/images/danoitech/android-icon-36x36.png"
	},
	{
		revision: "3015b866cd0e63510e95a576ddef7027",
		url: "assets/images/danoitech/android-icon-48x48.png"
	},
	{
		revision: "7548c3054d9866a11faf09718b5423e4",
		url: "assets/images/danoitech/android-icon-72x72.png"
	},
	{
		revision: "0c80f0871278e82a6d26204a5df10981",
		url: "assets/images/danoitech/android-icon-96x96.png"
	},
	{
		revision: "b6642f474b02c92c77795ba539b27a2d",
		url: "assets/images/danoitech/apple-icon-114x114.png"
	},
	{
		revision: "8deecb69186a7955bb876500300ebb90",
		url: "assets/images/danoitech/apple-icon-120x120.png"
	},
	{
		revision: "9df44884f62096ef1859bc28df5310d7",
		url: "assets/images/danoitech/apple-icon-144x144.png"
	},
	{
		revision: "e3975e15e59b3bbd3e7b3ecfd2a64734",
		url: "assets/images/danoitech/apple-icon-152x152.png"
	},
	{
		revision: "dd85627e9ce0eac885a16f43e2641b74",
		url: "assets/images/danoitech/apple-icon-180x180.png"
	},
	{
		revision: "8fc3d9cca9b776df180bc1d0156ec1b8",
		url: "assets/images/danoitech/apple-icon-57x57.png"
	},
	{
		revision: "16c9f2e59d981ec1c819b92cc9e3ad70",
		url: "assets/images/danoitech/apple-icon-60x60.png"
	},
	{
		revision: "7548c3054d9866a11faf09718b5423e4",
		url: "assets/images/danoitech/apple-icon-72x72.png"
	},
	{
		revision: "6066eb96496db995df3643af258541b8",
		url: "assets/images/danoitech/apple-icon-76x76.png"
	},
	{
		revision: "84bec219ec0d395bcf4abe3eb92c8b02",
		url: "assets/images/danoitech/apple-icon-precomposed.png"
	},
	{
		revision: "84bec219ec0d395bcf4abe3eb92c8b02",
		url: "assets/images/danoitech/apple-icon.png"
	},
	{
		revision: "fc00621e13b5ea986755ccfe7c852d0e",
		url: "assets/images/danoitech/apple-touch-icon-57x57.png"
	},
	{
		revision: "2dd0148968efa541a779e109ca4e54ea",
		url: "assets/images/danoitech/apple-touch-icon-60x60.png"
	},
	{
		revision: "0f65330ac599c36afbd7004d2480174f",
		url: "assets/images/danoitech/apple-touch-icon-72x72.png"
	},
	{
		revision: "a01f87ecaeb6048e23a77ada9ac4a387",
		url: "assets/images/danoitech/apple-touch-icon-76x76.png"
	},
	{
		revision: "a01f87ecaeb6048e23a77ada9ac4a387",
		url: "assets/images/danoitech/apple-touch-icon.png"
	},
	{
		revision: "bb689b24597d0693be4590f6017ee246",
		url: "assets/images/danoitech/browserconfig.xml"
	},
	{
		revision: "a2ee95979d5581aacf248e4dcdda199c",
		url: "assets/images/danoitech/favicon-16x16.png"
	},
	{
		revision: "94ce23cdd38fae44f15085b5076e3e8c",
		url: "assets/images/danoitech/favicon-32x32.png"
	},
	{
		revision: "0c80f0871278e82a6d26204a5df10981",
		url: "assets/images/danoitech/favicon-96x96.png"
	},
	{
		revision: "c52ef00158bcdae5dbaf969a78f5eeac",
		url: "assets/images/danoitech/favicon.ico"
	},
	{
		revision: "e8e95806b1092ad5b16def01059b24b5",
		url: "assets/images/danoitech/logo1.png"
	},
	{
		revision: "0bc4e0177dd7ea19fdca9d068ff0709b",
		url: "assets/images/danoitech/manifest.json"
	},
	{
		revision: "9df44884f62096ef1859bc28df5310d7",
		url: "assets/images/danoitech/ms-icon-144x144.png"
	},
	{
		revision: "7428adf3e7600cb338d796435714a9aa",
		url: "assets/images/danoitech/ms-icon-150x150.png"
	},
	{
		revision: "a93ec1a9bcd1cfeaae3f9b66409109a3",
		url: "assets/images/danoitech/ms-icon-310x310.png"
	},
	{
		revision: "b1c39f8d3dd48dd58dd85359547feedf",
		url: "assets/images/danoitech/ms-icon-70x70.png"
	},
	{
		revision: "3a8712eb8979b78e5421215a49093deb",
		url: "assets/images/danoitech/mstile-150x150.png"
	},
	{
		revision: "8cc49fae6443ac6659314681ad958ea1",
		url: "assets/images/danoitech/mstile-310x150.png"
	},
	{
		revision: "b699716159716ab45551d6e4e5b13283",
		url: "assets/images/danoitech/mstile-70x70.png"
	},
	{
		revision: "6baceec48589aa7f00b8d497b6f46303",
		url: "assets/images/danoitech/safari-pinned-tab.svg"
	},
	{
		revision: "0e88c850c985fdca44383863bd344a72",
		url: "assets/images/danoitech/site.webmanifest"
	},
	{
		revision: "99a021435d94c2240e73942fa7f23325",
		url: "assets/images/faq-1.jpg"
	},
	{
		revision: "a47868c2bfa18bf032b1d5bea17e36e5",
		url: "assets/images/faq-2.jpg"
	},
	{
		revision: "4d0e4ce9e8e42853393a476a3d2c4213",
		url: "assets/images/faq-3.jpg"
	},
	{
		revision: "acd96b9fe0d2a1aadbb8272c9239ee82",
		url: "assets/images/features-1.jpg"
	},
	{
		revision: "da2d02ffdbbaa25487ca756a293e187d",
		url: "assets/images/features-2.jpg"
	},
	{
		revision: "c04bebaff3545f0f87490a93bc69869a",
		url: "assets/images/features-3.jpg"
	},
	{
		revision: "3cb1135bc82588c499fe32b87123b474",
		url: "assets/images/features-4.jpg"
	},
	{
		revision: "0ba1b2a35a7dbcbe9d0e7925a1774816",
		url: "assets/images/features-bg.jpg"
	},
	{
		revision: "a8f097c510697fb8edf633fe3e3a549f",
		url: "assets/images/footer-logo.png"
	},
	{
		revision: "08d7a6e7f79be7dad98c74fd6a357560",
		url: "assets/images/footer-logo1.png"
	},
	{
		revision: "3d164060b73500c03d9d5defccea081e",
		url: "assets/images/goals-bg.jpg"
	},
	{
		revision: "812157df9fac889b11c26b2ed84719db",
		url: "assets/images/goals-item.png"
	},
	{
		revision: "9525e822da16fc82c86631923083947c",
		url: "assets/images/history-1.jpg"
	},
	{
		revision: "c7e38a410c308918080ac8b97d750a23",
		url: "assets/images/logo-2.png"
	},
	{
		revision: "7e44323ccec1f8e193f2391a76b89909",
		url: "assets/images/logo.png"
	},
	{
		revision: "d393c23b87cba91edd185b1de82a531f",
		url: "assets/images/logo1.png"
	},
	{
		revision: "c13f90674d0658022262f74535aa4894",
		url: "assets/images/mission-item.png"
	},
	{
		revision: "e4e04949805042b22c843f0211d86702",
		url: "assets/images/newsletter-dot.png"
	},
	{
		revision: "ca7719c8083a0fda4df2473ba9cbc15c",
		url: "assets/images/page-title-bg.jpg"
	},
	{
		revision: "689a5bc78ea4acaf61a007dbb072059e",
		url: "assets/images/Picture42.png"
	},
	{
		revision: "80296b245babc1a69dbad33cac8e148e",
		url: "assets/images/pricing-boost.png"
	},
	{
		revision: "ab697c499229b3fa02febe9488ea82ff",
		url: "assets/images/project-shadow.png"
	},
	{
		revision: "c3b6a35bd0497f18f84456759b1acfd6",
		url: "assets/images/project/project-1.jpg"
	},
	{
		revision: "613184d7632c93f3b8681b3be792eaec",
		url: "assets/images/project/project-2.jpg"
	},
	{
		revision: "b5afc6340e2ecbf3d393e3fe21dcb299",
		url: "assets/images/project/project-3.jpg"
	},
	{
		revision: "2915bfb9a4903603978de53ca3c4faa7",
		url: "assets/images/project/project-4.jpg"
	},
	{
		revision: "d427a09b10973a99873a1567a03b69a3",
		url: "assets/images/project/project-5.jpg"
	},
	{
		revision: "6ed8d66d38b5bc90aefb61f859f5f5d5",
		url: "assets/images/quote-item.png"
	},
	{
		revision: "8d8d46cefe1af41b381d2e97001f00f8",
		url: "assets/images/quote-thumb - Copy.png"
	},
	{
		revision: "967b9bbad7fd862f2fc133eee202dae3",
		url: "assets/images/quote-thumb.png"
	},
	{
		revision: "baa6e8c6c480f7b6be1eb34c41232f7d",
		url: "assets/images/request-dot.png"
	},
	{
		revision: "dd33dccc28c4207655b8bd2d04f6e5b6",
		url: "assets/images/requst-quote-bg-2.jpg"
	},
	{
		revision: "845bb80ce10e6de7aa6317d1838baa29",
		url: "assets/images/requst-quote-bg.jpg"
	},
	{
		revision: "978edbc1ce01d65b7f288724f1d498c7",
		url: "assets/images/services-1.jpg"
	},
	{
		revision: "7f1c77aa16c6644983cd678647cc2ace",
		url: "assets/images/services-2.jpg"
	},
	{
		revision: "ff31458c5ca1d8e0b31777abbb493d03",
		url: "assets/images/services-3.jpg"
	},
	{
		revision: "967e4d7dc3904958978fe3574092e60d",
		url: "assets/images/solutions-thumb.jpg"
	},
	{
		revision: "70cacf2a12ff8f8c36157ffda30e9804",
		url: "assets/images/team-1.jpg"
	},
	{
		revision: "d00a51a85841abec9617a4a365fc5374",
		url: "assets/images/team-2.1.png"
	},
	{
		revision: "3f8ba482f76e0d7bc09918e6d372f65b",
		url: "assets/images/team-2.2.png"
	},
	{
		revision: "8fd19903c701832da946724ca90352a0",
		url: "assets/images/team-2.3.png"
	},
	{
		revision: "610e6d1efb9af2b8b5adbb65cf187e81",
		url: "assets/images/team-2.4.png"
	},
	{
		revision: "bd983daefb18d4a117559021320b2220",
		url: "assets/images/team-2.5.png"
	},
	{
		revision: "b2ad50d36aad731f703c66320c925e04",
		url: "assets/images/team-2.6.png"
	},
	{
		revision: "ea0ebfcc8594e83fa2c1ce5d2ea77424",
		url: "assets/images/team-2.7.png"
	},
	{
		revision: "4055df4efb081d94703bc21f9a4b25ad",
		url: "assets/images/team-2.8.png"
	},
	{
		revision: "922c3df3f9e10955191071b4864a3049",
		url: "assets/images/team-2.jpg"
	},
	{
		revision: "57000287a9c4d73c76d3025bfdb3ee90",
		url: "assets/images/white logo 1.png"
	},
	{
		revision: "706f2143716c5230bc5dd65ec8d69dd9",
		url: "assets/images/working-dot-1.png"
	},
	{
		revision: "6535a6781d9afb31c2d845cfc3e205f2",
		url: "assets/images/working-dot-2.png"
	},
	{
		revision: "c3163ababe71b702ae4060d7a394256a",
		url: "assets/images/working-line.png"
	},
	{
		revision: "5f3cbd6a2828820730fb74902a8648f9",
		url: "assets/js/ajax-contact.js"
	},
	{
		revision: "b04c67f3e59c8fd1e26117f86dc13540",
		url: "assets/js/bootstrap.min.js"
	},
	{
		revision: "b5c1f83e8e2c9fad4a9c7a7e8c34b2fa",
		url: "assets/js/ion.rangeSlider.min.js"
	},
	{
		revision: "406a026be3d2dede89b98c72bc84508e",
		url: "assets/js/jquery.counterup.min.js"
	},
	{
		revision: "ba6cf724c8bb1cf5b084e79ff230626e",
		url: "assets/js/jquery.magnific-popup.min.js"
	},
	{
		revision: "d13462ec489f9f0c309a811f85feb3d6",
		url: "assets/js/jquery.nice-select.min.js"
	},
	{
		revision: "758c6956c9084d5e171ecfc8b5ddf1a0",
		url: "assets/js/main.js"
	},
	{
		revision: "00debcf6cf0789a19cee2278011afcd4",
		url: "assets/js/particles.min.js"
	},
	{
		revision: "56456db9d72a4b380ed3cb63095e6022",
		url: "assets/js/popper.min.js"
	},
	{
		revision: "d41d8cd98f00b204e9800998ecf8427e",
		url: "assets/js/serviceworker.js"
	},
	{
		revision: "d5a61c749e44e47159af8a6579dda121",
		url: "assets/js/slick.min.js"
	},
	{
		revision: "4f252523d4af0b478c810c2547a63e19",
		url: "assets/js/vendor/jquery-1.12.4.min.js"
	},
	{
		revision: "8b9e755b33e4961ac40ab6a7f3ddc3f9",
		url: "assets/js/vendor/modernizr-3.6.0.min.js"
	},
	{
		revision: "dfe0eedf8da578f4a4c43b05448c51d9",
		url: "assets/js/waypoints.min.js"
	},
	{
		revision: "36050285bfeeb7395752f0f9bbc08273",
		url: "assets/js/wow.min.js"
	},
	{ revision: "eee166c41188672a287c10b63b0f3bd9", url: "manifest.json" },
	{ revision: "e05729c32a03ce9b75ebc64e1d12043f", url: "robots.txt" },
	{ revision: "2551d0e3a164d87b562acf4a8efcc8d4", url: "sw.ts.js" }
]);

registerRoute(
	/\.(?:png|jpg|jpeg|svg|gif)$/,
	new CacheFirst({
		cacheName: "images-cache",
		plugins: [
			new workbox.expiration.Plugin({
				maxEntries: 50,
				maxAgeSeconds: 30 * 24 * 60 * 60 // 30 Days
			})
		]
	})
);
registerRoute(
	/\.(?:css|js|html|htm|xml)$/,
	new CacheFirst({
		cacheName: "assets-cache",
		plugins: [
			new workbox.expiration.Plugin({
				maxEntries: 50,
				maxAgeSeconds: 30 * 24 * 60 * 60 // 30 Days
			})
		]
	})
);

const postHandler = new CacheFirst({
	cacheName: "webassets-cache",
	plugins: [
		new workbox.expiration.Plugin({
			maxEntries: 50,
			maxAgeSeconds: 30 * 24 * 60 * 60 // 30 Days
		})
	]
});

registerRoute(new RegExp("/.*"), args => {
	return postHandler
		.handle(args)
		.then(response => {
			if (response.status === 404) {
				return caches.match("/404.html");
			}
			return response;
		})
		.catch(function() {
			return caches.match("/offline.html");
		});
});
