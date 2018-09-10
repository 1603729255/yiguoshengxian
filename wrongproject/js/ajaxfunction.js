 function objtostring(object) {
        var arr = [];
        for (var i in object) {
            arr.push(i + '=' + object[i]);
        }
        return arr.join('&');
    }


    function ajax(obj) {
        var ajax = new XMLHttpRequest();

        obj.type = obj.type || 'get'; //如果传了参数，使用参数的请求方法，没有默认get.

        obj.data = obj.data || ''; //如果没有写此参数，数据默认为空。

        //接口地址不能为空
        if (obj.url == '') {
            throw new Error('接口地址不能为空');
        }


        //判断数据的类型
        if (obj.data && typeof obj.data == 'object' && !Array.isArray(obj.data)) {
            obj.data = objtostring(obj.data);
        }


        //get方式：地址栏
        if (obj.data && obj.type == 'get' && Array.isArray(obj.data)) {
            obj.url += '?data=' + obj.data;
        } else if (obj.data && obj.type == 'get') {
            obj.url += '?' + obj.data;
        }

        if (obj.async === false) {
            obj.async = false;
        } else {
            obj.async = true;
        }


        ajax.open(obj.type, obj.url, obj.async);

        //post方式：设置请求头和将数据放到send里面。
        if (obj.data && obj.type == 'post') {
            ajax.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
            ajax.send(obj.data);
        } else {
            ajax.send();
        }

        if (obj.async === false) {
             obj.success && obj.success(ajax.responseText);
        } else {
            ajax.onreadystatechange = function() {
                if (ajax.readyState == 4) {
                    if (ajax.status == 200) {
                        //如果存在，将获取的数据以实参传给回调函数。
                        obj.success && obj.success(ajax.responseText);
                    } else {
                        obj.error && obj.error('接口地址错误：' + ajax.status);
                    }
                }
            }
        }
    }