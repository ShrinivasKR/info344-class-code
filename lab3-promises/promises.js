"use strict";


// Exercise 1: Brain-dead Promises
function add2(value) {
    new Promise(function (resolve, reject) {
        resolve(value)
    })
    .then((value) => {
        return value + 1;
    })
    .then((value) => {
        return value + 1;
    })
    .then((value) => {
        console.log(value);
    })
}

// add2(0);



// Exercise 2: Promisify http.get
var http = require('http');

function get(url) {
  // Return a new promise.
  return new Promise(function(resolve, reject) {
    // Do the usual request stuff
    http.get(url, function(res) {
        var body = '';
        res.on('data', function(chunk) {
            body += chunk;
        });
        res.on('end', function() {
            resolve(body);
        });
    }).on('error', function(err) {
        reject(err);
    });
  });
}

function getMovie(movie1, movie2, movie3) {
    return get("http://www.omdbapi.com/?i=" + movie1 + "&plot=short&r=json")
    .then(function(response) {
        console.log(JSON.parse(response));
        return get("http://www.omdbapi.com/?i=" + movie2 + "&plot=short&r=json");
    })
    .then(function(response) {
        console.log(JSON.parse(response));
        return get("http://www.omdbapi.com/?i=" + movie3 + "&plot=short&r=json");
    })
    .then(function(response) {
        console.log(JSON.parse(response));
    })
    .catch(function(err) {
        console.log(err);
    });
}

var id1 = "tt0120737";
var id2 = "tt0078748";
var id3 = "tt0082971";

// getMovie(id1, id2, id3);

function getThreeMoviesConcurrently(movie1, movie2, movie3) {
    return Promise.all(get("http://www.omdbapi.com/?i=" + movie1 + "&plot=short&r=json")
    .then(function(response) {
        console.log(JSON.parse(response));
        return get("http://www.omdbapi.com/?i=" + movie2 + "&plot=short&r=json");
    })
    .then(function(response) {
        console.log(JSON.parse(response));
        return get("http://www.omdbapi.com/?i=" + movie3 + "&plot=short&r=json");
    })
    .then(function(response) {
        console.log(JSON.parse(response));
    })
    .catch(function(err) {
        console.log(err);
    }));
}

// getThreeMoviesConcurrently(id1, id2, id3);  

function getMoviePoster(movieId) {
    return get("http://www.omdbapi.com/?i=" + movieId + "&plot=short&r=json")
    .then(function(response) {
       return get(JSON.parse(response)['Poster']);
    })
    .then(function(response) {
        console.log(response);
    })
    .catch(function(err) {
        console.log(err);
    });
}

getMoviePoster(id1);
