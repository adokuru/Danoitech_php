importScripts(
	"https://storage.googleapis.com/workbox-cdn/releases/4.3.1/workbox-sw.js"
);
const { registerRoute } = workbox.routing;
const { CacheFirst } = workbox.strategies;
const { CacheableResponse } = workbox.cacheableResponse;
const { precacheAndRoute } = workbox.precaching;
const {StaleWhileRevalidate} = workbox.strategies;
const {NetworkFirst} = workbox.strategies;


precacheAndRoute([

	{
		revision: "bc1756d1edcfb542ecb28dc1a7792ff8",
		url: "/offline.html"
	},
	{
		revision: "bc1756wwedcfb542e2328dc1a7792ff8",
		url: "/"
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
		revision: "7e44323ccec1f8e193f2391a76b89909",
		url: "assets/images/logo.png"
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
	{ revision: "eee166c41188672a287c10b63b0f3bd9", url: "manifest.json" },
	{ revision: "e05729c32a03ce9b75ebc64e1d12043f", url: "robots.txt" },
]);

registerRoute(
	/\.(?:png|jpg|jpeg|svg|gif)$/,
	new NetworkFirst({
		cacheName: "images-cacheV2",
		plugins: [
			new workbox.expiration.Plugin({
				maxEntries: 50,
				maxAgeSeconds: 10 * 24 * 60 * 60 // 10 Days
			})
		]
	})
);
registerRoute(
	/\.(?:css|js|html|php|xml)$/,
	new NetworkFirst({
		cacheName: "assets-cacheV2",
		plugins: [
			new workbox.expiration.Plugin({
				maxEntries: 50,
				maxAgeSeconds: 10 * 24 * 60 * 60 // 10 Days
			})
		]
	})
);

const postHandler = new NetworkFirst({
	cacheName: "webassets-cacheV2",
	plugins: [
		new workbox.expiration.Plugin({
			maxEntries: 50,
			maxAgeSeconds: 30 * 24 * 60 * 60 // 30 Days
		})
	]
});

registerRoute(/(.*)\.html/, args => {
	return postHandler.handle(args).then(response => {
      if (response.status === 404) {
        return caches.match('404.html');
      }
      return response;
    })
    .catch(function() {
      return caches.match('offline.html');
    });
  });

