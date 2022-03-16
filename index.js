import ListItems from "./components/list-items.js";

if (document.readyState === 'loading') {
	document.addEventListener('DOMContentLoader', init)
} else {
	init();
}

function init() {
	const data = {
		name: 'Каталог товаров',
		hasChildren: true,
		items: [
			{
				name: 'Мойки',
				hasChildren: true,
				items: [
					{
						name: 'Ulgran',
						hasChildren: true,
						items: [
							{
								name: 'smth',
								hasChildren: false,
								items: []
							},
							{
								name: 'smth',
								hasChildren: false,
								items: []
							}
						]
					},
					{
						name: 'Vigro Mramor',
						hasChildren: false,
						items: []
					},
					{
						name: 'Handmade',
						hasChildren: true,
						items: [
							{
								name: 'smth',
								hasChildren: false,
								items: []
							},
							{
								name: 'smth',
								hasChildren: false,
								items: []
							}
						]
					},
					{
						name: 'Vigro Glass',
						hasChildren: false,
						items: []
					},
				]
			},
			{
				name: 'Фильтры',
				hasChildren: true,
				items: [
					{
						name: 'Ulgran',
						hasChildren: true,
						items: [
							{
								name: 'smth',
								hasChildren: false,
								items: []
							},
							{
								name: 'smth',
								hasChildren: false,
								items: []
							}
						]
					},
					{
						name: 'Vigro Mramor',
						hasChildren: false,
						items: []
					},
				]
			}
		]
	}

	const items = new ListItems(document.getElementById('list-items'), data);
}
