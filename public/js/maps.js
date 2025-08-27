const map = L.map("map").setView([-1.449157, 121.854558], 5);

L.tileLayer("https://tile.openstreetmap.org/{z}/{x}/{y}.png", {
	maxZoom: 19,
}).addTo(map);

const geojsonData = {
	type: "FeatureCollection",
	features: [
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [119.4345067, -5.1361493],
			},
			properties: {
				popupContent: "Kantor Regional 8 PTPN 1",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [119.605531, -5.291201],
			},
			properties: {
				popupContent: "Kebun Takalar",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [120.8149204, -2.5631286],
			},
			properties: {
				popupContent: "kebun Tarengge",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [120.7881781, -2.5251552],
			},
			properties: {
				popupContent: `<p>- kebun Tomoni</p>
                                                                            <p>- luas: 000</p>`,
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [119.647795, -5.2445673],
			},
			properties: {
				popupContent: `<p>- kebun Lanna Gowa</p>
                                                                            <p>- luas: 000</p>`,
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [119.5031032, -5.3950136],
			},
			properties: {
				popupContent: `<p>- kebun Moncongkomba</p>
                                                                            <p>- luas: 000</p>`,
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [110.576195, -7.660215],
			},
			properties: {
				popupContent: "<p>Kebun Batujamus (PTPN IX – Karanganyar)</p>",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [109.019409, -7.713578],
			},
			properties: {
				popupContent: "<p>Kebun Warnasari (PTPN IX – Cilacap)</p>",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [109.008233, -7.439152],
			},
			properties: {
				popupContent: "<p>Kebun Kawung (PTPN IX – Cilacap)</p>",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [109.449445, -7.662344],
			},
			properties: {
				popupContent: "<p>Kebun Krumbut (PTPN IX – Banyumas)</p>",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [109.680919, -6.849946],
			},
			properties: {
				popupContent: "<p>Kebun Blimbing (PTPN IX – Pekalongan)</p>",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [109.783482, -6.980133],
			},
			properties: {
				popupContent: "<p>Kebun Siluwok (PTPN IX – Batang)</p>",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [110.010482, -6.866498],
			},
			properties: {
				popupContent: "<p>Kebun Merbuh (PTPN IX – Kendal)</p>",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [110.661744, -6.224741],
			},
			properties: {
				popupContent: "<p>Kebun Balong (PTPN IX – Jepara)</p>",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [110.384063, -7.010623],
			},
			properties: {
				popupContent: "<p>Kebun Sukamangli (PTPN IX – Kendal)</p>",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [110.444288, -6.999232],
			},
			properties: {
				popupContent: "<p>Kebun Getas (PTPN IX – Semarang)</p>",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [110.482541, -7.027263],
			},
			properties: {
				popupContent: "<p>Kebun Ngobo (PTPN IX – Semarang)</p>",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [111.02456, -6.794857],
			},
			properties: {
				popupContent: "<p>Kebun Jollong (PTPN IX – Pati)</p>",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [99.508889, 2.905], // 99°30'32" E, 2°54'18" N
			},
			properties: {
				popupContent: "<p>Sei Silau Estate (PTPN III – Asahan, Sumut)</p>",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [99.501389, 2.868661], // 99°30'4.98" E, 2°52'3.18" N
			},
			properties: {
				popupContent: "<p>Pulau Mandi Estate (PTPN III – Asahan, Sumut)</p>",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [99.43, 2.910389], // 99°25'50.8" E, 2°54'37.4" N
			},
			properties: {
				popupContent: "<p>Ambalutu Estate (PTPN III – Asahan, Sumut)</p>",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [99.419, 2.884722], // 99°25'8" E, 2°53'5" N
			},
			properties: {
				popupContent: "<p>Huta Padang Estate (PTPN III – Asahan, Sumut)</p>",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [99.161667, 3.122222], // 99°09'38.7" E, 3°07'09.8" N
			},
			properties: {
				popupContent: "<p>Dolok Ilir Estate (PTPN IV – Simalungun, Sumut)</p>",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [99.199, 3.100556], // 99°11'56" E, 3°06'02" N
			},
			properties: {
				popupContent: "<p>Laras Estate (PTPN IV – Simalungun, Sumut)</p>",
			},
		},
		{
			type: "Feature",
			geometry: { type: "Point", coordinates: [113.363, -8.135] },
			properties: { popupContent: "<p>Kebun Djatiroto (PTPN XI – Lumajang)</p>" },
		},
		{
			type: "Feature",
			geometry: { type: "Point", coordinates: [114.343, -7.726] },
			properties: { popupContent: "<p>Kebun Kendenglembu (PTPN XII – Banyuwangi)</p>" },
		},
		{
			type: "Feature",
			geometry: { type: "Point", coordinates: [113.619, -7.436] },
			properties: { popupContent: "<p>Kebun Sukosari (PTPN XI – Bondowoso)</p>" },
		},
		{
			type: "Feature",
			geometry: { type: "Point", coordinates: [112.699, -7.755] },
			properties: { popupContent: "<p>Kebun Glenmore (PTPN XII – Banyuwangi)</p>" },
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [103.082371, -3.054989],
			},
			properties: {
				popupContent: "<p>PTPN VII – Unit Sungai Lengi (Muara Enim, Sumsel)</p>",
			},
		},
		{
			type: "Feature",
			geometry: {
				type: "Point",
				coordinates: [104.46, -2.99],
			},
			properties: {
				popupContent: "<p>PTPN VII – Kebun Betung (Palembang-Sekayu, Sumsel)</p>",
			},
		},
		{
			type: "Feature",
			geometry: { type: "Point", coordinates: [107.6191, -6.9175] },
			properties: { popupContent: "<p>Kebun Cibodas (PTPN VIII – Cianjur, Jabar)</p>" },
		},
		{
			type: "Feature",
			geometry: { type: "Point", coordinates: [106.7417, -6.599] },
			properties: { popupContent: "<p>Kebun Sukabumi (PTPN VIII – Sukabumi, Jabar)</p>" },
		},
		{
			type: "Feature",
			geometry: { type: "Point", coordinates: [107.7239, -6.9235] },
			properties: { popupContent: "<p>Kebun Tempur (PTPN VIII – Bandung, Jabar)</p>" },
		},
		{
			type: "Feature",
			geometry: { type: "Point", coordinates: [109.3333, 0.0] },
			properties: { popupContent: "<p>Kebun Danau Salak (PTPN XIII – Pontianak, Kalbar)</p>" },
		},
		{
			type: "Feature",
			geometry: { type: "Point", coordinates: [109.3333, 0.05] },
			properties: { popupContent: "<p>Kebun Kumai (PTPN XIII – Kumai, Kalbar)</p>" },
		},
		{
			type: "Feature",
			geometry: { type: "Point", coordinates: [109.3, -0.05] },
			properties: { popupContent: "<p>Kebun Batulicin (PTPN XIII – Batulicin, Kalbar)</p>" },
		},
		{
			type: "Feature",
			geometry: { type: "Point", coordinates: [109.5, -0.1] },
			properties: { popupContent: "<p>Kebun Pelaihari (PTPN XIII – Pelaihari, Kalbar)</p>" },
		},
		{
			type: "Feature",
			geometry: { type: "Point", coordinates: [109.45, 0.01] },
			properties: { popupContent: "<p>Kebun Pamukan (PTPN XIII – Pamukan, Kalbar)</p>" },
		},
	],
};

var markers = L.markerClusterGroup();

geojsonData.features.forEach((feature) => {
	const coords = feature.geometry.coordinates;
	const popupContent = feature.properties.popupContent;
	const marker = L.marker([coords[1], coords[0]]).bindPopup(popupContent);
	markers.addLayer(marker);
});

map.addLayer(markers);
