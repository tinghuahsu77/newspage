var url = 'http://newsapi.org/v2/everything?' +
          'q=Apple&' +
          'from=2020-10-23&' +
          'sortBy=popularity&' +
          'apiKey=79fe996274ff4587b3432be774587e57';

var req = new Request(url);

fetch(req)
    .then(function(response) {
        console.log(response.json());
    })