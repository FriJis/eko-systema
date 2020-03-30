<?
$json = json_decode('{
	"module": "catalog",
	"method": "category",
	"domain": "eko-systema.ru",
	"system-build": "22663",
	"lang": "ru",
	"pre-lang": "",
	"header": "\u041a\u0430\u0442\u0430\u043b\u043e\u0433",
	"title": "\u041a\u0430\u0442\u0430\u043b\u043e\u0433 \u043a\u043b\u0438\u043c\u0430\u0442\u0438\u0447\u0435\u0441\u043a\u043e\u0439 \u0442\u0435\u0445\u043d\u0438\u043a\u0438 \u0432 \u0423\u0444\u0435: \u043a\u043e\u043d\u0434\u0438\u0446\u0438\u043e\u043d\u0435\u0440\u044b \u043d\u0430\u0441\u0442\u0435\u043d\u043d\u044b\u0435, \u043c\u043e\u0431\u0438\u043b\u044c\u043d\u044b\u0435 \u043a\u043e\u043d\u0434\u0438\u0446\u0438\u043e\u043d\u0435\u0440\u044b, \u0442\u0435\u043f\u043b\u043e\u0432\u043e\u0435 \u043e\u0431\u043e\u0440\u0443\u0434\u043e\u0432\u0430\u043d\u0438\u0435, \u0430\u043a\u0441\u0435\u0441\u0441\u0443\u0430\u0440\u044b",
	"site-name": "\u041a\u043e\u043d\u0434\u0438\u0446\u0438\u043e\u043d\u0435\u0440\u044b Eco Systems",
	"meta": {
		"keywords": "",
		"description": ""
	},

	"request-uri": "\/market\/.json",
	"user": {
		"id": "337",
		"type": "guest"
	},

	"pageId": "11",
	"parents": {

	},

	"page": {
		"id": 11,
		"parentId": 0,
		"link": "\/market\/",
		"is-visible": true,
		"is-active": true,
		"object-id": 371,
		"object-guid": "",
		"type-id": 85,
		"type-guid": "catalog-category",
		"update-time": 1429273855,
		"alt-name": "market",
		"basetype": {
			"id": 55,
			"module": "catalog",
			"method": "category",
			"title": "\u0420\u0430\u0437\u0434\u0435\u043b\u044b \u043a\u0430\u0442\u0430\u043b\u043e\u0433\u0430"
		},
		"name": "\u041a\u0430\u0442\u0430\u043b\u043e\u0433",
		"properties": {
			"group": {
				"0": {
					"id": 195,
					"name": "common",
					"title": "\u041e\u0431\u0449\u0435\u0435",
					"property": {
						"0": {
							"id": 2,
							"name": "title",
							"type": "string",
							"title": "\u041f\u043e\u043b\u0435 TITLE",
							"value": {
								"value": "\u041a\u0430\u0442\u0430\u043b\u043e\u0433 \u043a\u043b\u0438\u043c\u0430\u0442\u0438\u0447\u0435\u0441\u043a\u043e\u0439 \u0442\u0435\u0445\u043d\u0438\u043a\u0438 \u0432 \u0423\u0444\u0435: \u043a\u043e\u043d\u0434\u0438\u0446\u0438\u043e\u043d\u0435\u0440\u044b \u043d\u0430\u0441\u0442\u0435\u043d\u043d\u044b\u0435, \u043c\u043e\u0431\u0438\u043b\u044c\u043d\u044b\u0435 \u043a\u043e\u043d\u0434\u0438\u0446\u0438\u043e\u043d\u0435\u0440\u044b, \u0442\u0435\u043f\u043b\u043e\u0432\u043e\u0435 \u043e\u0431\u043e\u0440\u0443\u0434\u043e\u0432\u0430\u043d\u0438\u0435, \u0430\u043a\u0441\u0435\u0441\u0441\u0443\u0430\u0440\u044b"
							}

						},

						"1": {
							"id": 3,
							"name": "h1",
							"type": "string",
							"title": "\u041f\u043e\u043b\u0435 H1",
							"value": {
								"value": "\u041a\u0430\u0442\u0430\u043b\u043e\u0433"
							}

						}

					}

				},

				"1": {
					"id": 197,
					"name": "more_params",
					"title": "\u0414\u043e\u043f\u043e\u043b\u043d\u0438\u0442\u0435\u043b\u044c\u043d\u044b\u0435 \u043f\u0430\u0440\u0430\u043c\u0435\u0442\u0440\u044b",
					"property": {
						"0": {
							"id": 12,
							"name": "show_submenu",
							"type": "boolean",
							"title": "\u041f\u043e\u043a\u0430\u0437\u044b\u0432\u0430\u0442\u044c \u043f\u043e\u0434\u043c\u0435\u043d\u044e",
							"value": {
								"value": 1
							}

						},

						"1": {
							"id": 13,
							"name": "is_expanded",
							"type": "boolean",
							"title": "\u041c\u0435\u043d\u044e \u0432\u0441\u0435\u0433\u0434\u0430 \u0440\u0430\u0437\u0432\u0435\u0440\u043d\u0443\u0442\u043e",
							"value": {
								"value": 1
							}

						}

					}

				}

			}

		}

	}
}', true);
echo json_encode($json, JSON_UNESCAPED_UNICODE);
