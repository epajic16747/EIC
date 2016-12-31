function showResult()
{
	var input = document.getElementById("searchField").value;
	
	if(input.length == 0)
	{
		document.getElementById("searchResults").innerHTML = "";
		document.getElementById("searchResults").style.border = "0px";
	}
	else
	{
		ajax = new XMLHttpRequest();

		ajax.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				document.getElementById("searchResults").innerHTML=this.responseText;
      			document.getElementById("searchResults").style.border="1.5px solid";
      			document.getElementById("searchResults").style.backgroundColor = "black";
			}
		}


		ajax.open("GET", "pages/search.php?searchInput="+input);
		ajax.send();
	}


}