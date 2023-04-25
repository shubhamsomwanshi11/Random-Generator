let code = '';
var names = []
function GenerateCards() {
  for (let i = 0; i < names.length; i++) {
    code += `<div class="column">
        <div class="card">
          <div class="card-image">
            <figure class="image is-4by3">
              <img
                src="https://cdn.vox-cdn.com/thumbor/FHOKTiKEBNnFid9JYeRjAR4taqA=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/13050321/pikachu_review_lead.jpg"
                alt="Number Generator">
            </figure>
          </div>
          <div class="card-content">
            <div class="content has-text-centered">
              <h3 class="title is-4">Random ${names[i]} Generator</h3>
              <p class="subtitle is-6">Use our awesome tool to generate random Pokemon.</p>
              <a href="Generator.html" class="button is-success is-rounded">Use Generator</a>
            </div>
          </div>
        </div>
      </div>`
  }
  document.getElementById("RandomArea").innerHTML = code;
}

function GenerateHeader() {
  document.getElementById("head").innerHTML = `
    <div class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-white">
                    Random Generators
                </h1>
                <h2 class="subtitle has-text-white">
                    Unleash your creativity with our random generators that offer endless possibilities at the touch of a
                    button.
                </h2>
                <div class="is-right">
                    <input type="text" class="input is-rounded" placeholder="Search Random Generators">
                </div>
            </div>
        </div>
    </div>`
}
document.addEventListener('DOMContentLoaded', function () {
// GenerateCards();
// GenerateHeader();
});