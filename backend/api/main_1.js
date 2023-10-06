let request = new XMLHttpRequest();
    request.open('GET', 'https://jsonplaceholder.typicode.com/users', true);
    request.send();
    request.onload=()=>{
        let center = document.querySelector('center');
        let data = request.responseText;
        let result = JSON.parse(data);
        console.log(result);
        result.forEach((res)=>{
            console.log(res.name);
            center.innerHTML += `
                <br/><br/> ID: ${res.id} <br/>
                <br/> Name: ${res.name} <br/>
                <br/> Email: ${res.email} <br/>
                <br/> Phone: ${res.phone} <br/>
                <br/> username: ${res.username} <br/>`;
        })
    }