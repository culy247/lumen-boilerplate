/**
 * @apiDefine PermissionsResponse
 * @apiSuccessExample {json} Success-Response:
 HTTP/1.1 200 OK
 {
    "data": [
        {
            "type": "permissions",
            "id": "BX0gNpxGL2ymj8zgD9lqnrVZwQaMDkOY",
            "attributes": {
                "name": "view backend"
            }
        }
    ],
    "meta": {
        "pagination": {
            "total": 16,
            "count": 1,
            "per_page": 1,
            "current_page": 1,
            "total_pages": 16
        }
    },
    "links": {
        "self": "http://{{domain}}/auth/permissions?limit=1&page=1",
        "first": "http://{{domain}}/auth/permissions?limit=1&page=1",
        "next": "http://{{domain}}/auth/permissions?limit=1&page=2",
        "last": "http://{{domain}}/auth/permissions?limit=1&page=16"
    }
}
 */