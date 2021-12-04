document.addEventListener('DOMContentLoaded', function() {
    document.querySelector("#follow").addEventListener("click", function (event) {
        console.log(event.target.id)
        fetch("http://127.0.0.1:8000/user/1/follow/",
            {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                method: "GET",}
        ).then(r =>  r.json().then(data => console.log(data.data)))


    })
})