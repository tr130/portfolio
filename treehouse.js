const treehouseScore = document.getElementById('treehouse-score')
const badges = document.getElementById('treehouse-badges')

function getJSON(url, callback) {
  const xhr = new XMLHttpRequest();
  xhr.open('GET', url);
  xhr.onload = () => {
    if(xhr.status === 200) {
      //parse the response text as json
      let data = JSON.parse(xhr.responseText);
      return callback(data);
    }
  };
  xhr.send();
}

function showTreehouseInfo(data) {
  treehouseScore.textContent = data.points.total;

  for (let i = 0; i < data.badges.length; i++) {
    let badgeContainer = document.createElement('div');
    badgeContainer.className = 'col-3 col-md-2';
    let badge = document.createElement('img');
    let topic = document.createElement('h6');
    badge.setAttribute('src', data.badges[i].icon_url);
    topic.textContent = data.badges[i].name;
    badgeContainer.appendChild(badge);
    badgeContainer.appendChild(topic);
    badges.appendChild(badgeContainer);
  }
}

getJSON('https://teamtreehouse.com/henrygolding2.json', showTreehouseInfo)