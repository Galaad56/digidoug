
    var currentPostID = document.querySelector('.slider').getAttribute('data-post-id');
    console.log('Initial Post ID: ' + currentPostID);

    var arrows = document.querySelectorAll('.arrow');
    arrows.forEach(function(arrow) {
        arrow.addEventListener('click', function() {
            var direction = this.id === 'next' ? 'next' : 'prev';
            loadSlide(direction);
            console.log ('direction: ' + direction)
        });
    });

    function loadSlide(direction) {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', ajaxslider.ajaxurl, true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.error) {
                        console.log(response.error);
                    } else {
                        var slider = document.querySelector('.slider');
                        slider.innerHTML = response.thumbnail;
                        slider.setAttribute('data-post-id', response.postID);
                        currentPostID = response.postID;
                        console.log('New Post ID: ' + currentPostID);
                    }
                } else {
                    console.log('Error: ' + xhr.status);
                }
            }
        };
        xhr.send('action=load_slide&direction=' + direction + '&currentPostID=' + currentPostID);
    }
