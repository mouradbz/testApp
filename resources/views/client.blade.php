<div class=" col-md-3">
@if(session()->has('message'))
   <div class="alert alert-success container alert-dismissible" style="width:50%;margin-top:30px;">
   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>félicitation!</strong> Client est ajouté.
</div>
@endif
                   <form class="well form-horizontal" action="client" method="POST">
                      <fieldset>
                       <legend>Ajouter un client</legend>
                         <div class="form-group">
                            
                            <div class=" inputGroupContainer">
                               <div class="input-group">
                                 <span class="input-group-addon">
                                     <i class="glyphicon glyphicon-user"></i>
                                 </span>
                                 <input id="fullName" name="nom" placeholder="nom" class="form-control @error('nom') is-invalid @enderror" required="true" value="" type="text">
                                 
                               </div>
                               @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                         </div>
                         <div class="form-group">
                            <div class="inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input id="fullName" name="prenom" placeholder="prenom" class="form-control @error('prenom') is-invalid @enderror" required="true" value="" type="text"></div>
                            </div>
                            @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>
                         <div class="form-group">
                            <div class=" inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span><input id="email" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" required="true" value="" type="text"></div>
                            </div>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>
                         <div class="form-group">
                            <div class="inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span><input id="phoneNumber" name="telephone" placeholder="telephone" class="form-control @error('telephone') is-invalid @enderror" required="true" value="" type="text"></div>
                            </div>
                            @error('telephone')
                                    <span class="invalid-feedback" role="alert" style="color:red;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                         </div>
                         <div class="form-group" style="float:right;">
                            <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></button>
                         </div>
                      </fieldset>
                      @csrf
                   </form>
                
                
          
    </div>


    
	<div class="">
        <div class="col-md-3">
            <form action="#" method="get">
                <div class="input-group">
                    
                    <input class="form-control" id="system-search" name="q" placeholder="Search for" required>
                    <span class="input-group-btn">
                        <button type="submit" class="btn btn-success"><i class="glyphicon glyphicon-search"></i></button>
                    </span>
                </div>
            </form>
        </div>
		<div class="col-md-6">
    	 <table class="table table-list-search">
                    <thead>
                        <tr>
                            <th>nom</th>
                            <th>prenom</th>
                            <th>mail</th>
                            <th>tel</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)
            <tr>
                <?php $x = '#'.(string)$client->id; $y =(string)$client->id;$z = 'client/'.(string)$client->id; ?>
                
                <td>{{$client->nom}}</td>
                <td>{{$client->prenom}}</td>
                <td>{{$client->email}}</td>
                <td>{{$client->telephone}}</td>
                
                <td class="text-center">
                <button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target={{$x}}>
                                    <span class="glyphicon glyphicon-trash"></span>
                                </button>
                                <div class="modal fade" id={{$y}} tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                         <div class="modal-content">
                                           <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Voulez vous vraiment supprimer cette client ?</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="modal-footer">
        <a href={{$z}} data-dismiss="modal">OUI</a>
      </div>
    </div>
  </div>
</div>

                  </td>
                
            </tr>
           
         @endforeach
                        
                        </tbody>
                </table>   
		</div>
	</div>

<script>
$(document).ready(function() {
    var activeSystemClass = $('.list-group-item.active');

    
    $('#system-search').keyup( function() {
       var that = this;
        
        var tableBody = $('.table-list-search tbody');
        var tableRowsClass = $('.table-list-search tbody tr');
        $('.search-sf').remove();
        tableRowsClass.each( function(i, val) {
        
            
            var rowText = $(val).text().toLowerCase();
            var inputText = $(that).val().toLowerCase();
            if(inputText != '')
            {
                $('.search-query-sf').remove();
                tableBody.prepend('<tr class="search-query-sf"><td colspan="6"><strong>Searching for: "'
                    + $(that).val()
                    + '"</strong></td></tr>');
            }
            else
            {
                $('.search-query-sf').remove();
            }

            if( rowText.indexOf( inputText ) == -1 )
            {
                
                tableRowsClass.eq(i).hide();
                
            }
            else
            {
                $('.search-sf').remove();
                tableRowsClass.eq(i).show();
            }
        });
        if(tableRowsClass.children(':visible').length == 0)
        {
            tableBody.append('<tr class="search-sf"><td class="text-muted" colspan="6">No entries found.</td></tr>');
        }
    });
});
</script>