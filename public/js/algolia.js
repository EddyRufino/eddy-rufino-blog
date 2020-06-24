(function() {
  var client = algoliasearch('KHWGN43LX7', '2f5ad65dc59e51225423603d883dbaf2');
  var index = client.initIndex('posts');
  var enterPressed = false;
  //initialize autocomplete on search input (ID selector must match)
  autocomplete('#aa-search-input',
      { hint: false }, {
          source: autocomplete.sources.hits(index, { hitsPerPage: 5 }),
          //value to be displayed in input control after user's suggestion selection
          displayKey: 'name',
          //hash of templates used when rendering dataset
          templates: {
              //'suggestion' templating function used to render a single suggestion
              suggestion: function (suggestion) {
                  const markup = `
                      <div class="algolia-result">
                        <span>
                          ${suggestion._highlightResult.title.value}
                        </span>
                      </div>
                  `;

                  return markup;
              },
              empty: function (result) {
                  return 'Ups!! No hemos encontrado nada sobre "' + result.query + '"';
              }
          }
      }).on('autocomplete:selected', function (event, suggestion, dataset) {
          window.location.href = window.location.origin + '/blog/' + suggestion.url;
          enterPressed = true;
      }).on('keyup', function(event) {
          if (event.keyCode == 13 && !enterPressed) {
              window.location.href = window.location.origin + '/search-algolia?q=' + document.getElementById('aa-search-input').value;
          }
      });
})();
