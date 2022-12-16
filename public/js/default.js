

const addFavoriteItem = (element) => {
    console.log(element)
    var data = {}
    data.user_id = 1

    $.ajax({
        type: "post",
        url: "/api/favoriteItem/add",
        data: data,
        dataType: "text",
        success: function (response) {
        }
    });
}

const loadItem = () => {
    $.ajax({
        type: "get",
        url: "/api/item/list",
        dataType: "text",
        success: function (response) {
            // console.log(response)
            var data = JSON.parse(response)
            renderItemList(data.items)
        }
    });
}

const renderItemList = (items) => {
    var tbody = document.getElementById('tbodyItem')
    for (item of items) {
        console.log(item)
        var tr = document.createElement('tr')
        var tdName = document.createElement('td')
        var tdPrice = document.createElement('td')
        tdName.innerHTML = item.name
        tdPrice.innerHTML = item.price

        tr.appendChild(tdName)
        tr.appendChild(tdPrice)
        tbody.appendChild(tr)
    }
}