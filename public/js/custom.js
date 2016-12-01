(function($, undefined) {

    /*
    var btn = $('button');

    btn.on('click', function(event) {

        event.preventDefault();

        var url = 'http://www.omdbapi.com';

        var data = {
              t : 'Titanic'
        };

        $.get(url, data).done(function(data) {
              console.log(data);
        })
      })
     */

    var searchPage = $('div.search-page');

    // search page vecji od 1, kar pomeni da obstaja
    if(searchPage.length > 0) {
        var searchButton = searchPage.find("button.search-btn");

        var searchInput = searchPage.find("input.search-input");

        searchButton.on('click', function(e) {
            e.preventDefault();

            var query = searchInput.val();

            if(query.length <= 0) {
                return false;
                console.log(query);
            }

            var url = 'http://www.omdbapi.com';

            var data = {
                t : query
            };

            $.get(url, data).done(function(data) {
                var title = data.Title;
                var genre = data.Genre;
                var year = data.Year;
                var image = data.Poster;

                var row = $('<tr />');
                var td = $('<td />');

                var titleTd = td.clone().addClass('title');
                var imageTd = td.clone().addClass('image');
                var genreTd = td.clone().addClass('genre');
                var yearTd = td.clone().addClass('year');

                titleTd.text(title);
                genreTd.text(genre);
                yearTd.text(year);

                var imageWrapper = $("<img />").attr({
                    'src' : image,
                    'alt' : 'img.jpg'
                });

                imageTd.append(imageWrapper);

                row.append(imageTd);
                row.append(titleTd);
                row.append(genreTd);
                row.append(yearTd);

                var table = $('table tbody.table-append');
                // da se ne nafilajo veckrat
                table.html(row);
            })

        });
    };

})(jQuery);
