$(document).ready(function(){
		  var number = 2;
		  $("#addHtml").click(function(){
		   var html  = '<h5>Person ' + numberToBase26(number+1) + '</h5>';
			   html += '<div class="form-group">';
			   html += '<label for="exampleInputEmail1">Age of Death</label>';
			   html += '<input type="text" class="form-control" name="age[' + number + ']" id="exampleInputEmail1" placeholder="">';
			   html += '</div>';
			   html += '<div class="form-group">';
			   html += '<label for="exampleInputPassword1">Year of Death</label>';
			   html += '<input type="text" class="form-control" name="year[' + number + ']" id="exampleInputPassword1" placeholder="">';
			   html += '</div>';
		   $("#formHtml").append(html);
		   number++;
		  });

		  const numberToBase26 = (val, tail = '') => {
			  if (val <= 26) {
			    return `${String.fromCharCode(val + 64)}${tail}`;
			  }

			  const remainder = val % 26 || 26;
			  const division = Math.trunc(val / 26) - (remainder === 26 ? 1 : 0);

			  return numberToBase26(division, `${String.fromCharCode(remainder + 64)}${tail}`);
		  };
		});