@include('admdash')
<br><br><br>
<!DOCTPE html>
<html>
<head>
<title>View Flight Records</title>
</head>
<body>



<h1>Flight Details</h1>
<br>
<br><br>
<table border = "1">
<tr>
<!--/****
*@code for table heading
*@author :Sunu Sukesan
*@date:11/03/2021
****/-->
<th>FLIGHT ID</th>
			<th>FLIGHT NAME</th>
			<th>FLIGHT NUMBER</th>
			<th>DEPARTURE</th>
			<th>DEPARTURE DATE</th>
			<th>DEPARTURE TIME</th>
			<th>DESTINATION</th>
			<th>DESTINATION DATE</th>
			<th>DESTINATION TIME</th>
			<th>TOTAL BUSSINESS CLASS SEATS</th>
			<th>TOTAL FIRST CLASS SEATS</th>
            <th>TOTAL ECONOMIC CLASS SEATS</th>
			<th>COST FOR FIRST CLASS</th>
            <th>COST FOR BUSINESS CLASS</th>
            <th>COST FOR ECONOMIC CLASS</th>
            <th colspan="2">ACTION</th>

</tr>
<!--/****
*@code for fetching values from table
*@author :Sunu Sukesan
*@date:11/03/2021
****/-->
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->fno }}</td>
<td>{{ $user->fname }}</td>
<td>{{ $user->departure }}</td>
<td>{{ $user->depdate }}</td>
<td>{{ $user->deptime }}</td>
<td>{{ $user->dest }}</td>
<td>{{ $user->desdate }}</td>
<td>{{ $user->destime }}</td>
<td>{{ $user->bseat }}</td>
<td>{{ $user->fseat }}</td>
<td>{{ $user->eseat }}</td>
<td>{{ $user->fcost}}</td>
<td>{{ $user->bcost}}</td>
<td>{{ $user->ecost}}</td>
<td><a href= {{"delete/".$user->id }}>Delete</a></td>
<td><a href= {{"edit/".$user->id }}>Update</a></td>

</tr>
@endforeach
</table>
</body>
</html>