<td>
	<div class="btn-group">
		<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
			Aksi 
			<span class="caret"></span>
			<span class="sr-only">Toggle Dropdown</span>
		</button>
		<ul class="dropdown-menu" roles="menu">
			<li>
				<form action="{{$formAction}}" method="POST">
					<input type="hidden" name="{{$viewName}}">
					<button class="tombol-drop" type="submit">View</button>
				</form>
			</li>
			<li>
				@yield('actionEdit')
			</li>
			<li>
				@yield('actionDelete')
			</li>
		</ul>
	</div>
</td>