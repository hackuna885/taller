<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/sweetalert2.min.css">
	<title>TUVSA Transportistas Unidos del Valle de México Clave 10, S.A. de C.V.</title>
    <style>
        .badge-primary{
            background-color: #FF6500 !important; 
        }
        .btn-primary{
            background-color: #FF6500 !important; 
        }
        .bg-primary{
            background-color: #FF6500 !important; 
        }
        body {
            background-image: url('../img/RUTA_10.svg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 mx-auto">
                    <h3 class="text-center my-5"><div  class="badge badge-primary p-3">ORDEN DE INGRESO A TALLER</div></h3>


                    <form @submit.prevent="alta">
                        <div class="row">                            
                            <div class="col-sm-12 col-lg-4 mb-3 mb-sm-0">
                                <label>Fecha de ingreso:</label>
                                <input type="date" class="form-control form-control-user mb-3 mayusculas" v-model="fechaIngre" placeholder="Fecha de ingreso" required/>
                            </div>                        
                            <div class="col-sm-12 col-lg-4 mb-3 mb-sm-0">
                                <label>Hora:</label>
                                <input type="time" class="form-control form-control-user mb-3 mayusculas" v-model="horaIngre" placeholder="Fecha de ingreso" required/>
                            </div>                        
                            <div class="col-sm-12 col-lg-4 mb-3 mb-sm-0">
                                <label>Orden de reparación:</label>
                                <input type="text" class="form-control form-control-user mb-3 mayusculas" v-model="ordenRepIngre" placeholder="Orden de reparación No." required/>
                            </div>                        
                            <div class="col-12 mb-3 mb-sm-0">
                                <label>Gestor operativo:</label>
                                <input type="text" class="form-control form-control-user mb-3 mayusculas" v-model="gestorOperIngre" placeholder="Gestor operativo que la otorga"/>
                            </div>
                            <div class="col-sm-12 col-lg-4 mb-3 mb-sm-0">
                                <label>Número Económico:</label>
                                <input type="text" class="form-control form-control-user mb-3 mayusculas" v-model="numEcoIngre" placeholder="Número Económico" required/>
                            </div>                     
                            <div class="col-sm-21 col-lg-2 mb-3 mb-sm-0">
                                <label>Placas:</label>
                                <input type="text" class="form-control form-control-user mb-3 mayusculas" v-model="placasIngre" placeholder="Placas" required/>
                            </div>                     
                            <div class="col-sm1-2 col-lg-2 mb-3 mb-sm-0">
                                <label>Tipo:</label>
                                <input type="text" class="form-control form-control-user mb-3 mayusculas" v-model="tipoIngre" placeholder="Tipo"/>
                            </div>                     
                            <div class="col-s1m-2 col-lg-2 mb-3 mb-sm-0">
                                <label>Año:</label>
                                <input type="number" min="1900" max="2099" step="1" value="2020" class="form-control form-control-user mb-3 mayusculas" v-model="anoIngre" placeholder="Año" required/>
                            </div>                     
                            <div class="col-sm-12 col-lg-2 mb-3 mb-sm-0">
                                <label>Ramal:</label>
                                <input type="text" class="form-control form-control-user mb-3 mayusculas" v-model="ramalIngre" placeholder="Ramal"/>
                            </div>                     
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label>Nombre del Accionista:</label>
                                <input type="text" class="form-control form-control-user mb-3 mayusculas" v-model="nomAccionistaIngre" placeholder="Nombre del Accionista"/>
                            </div>                     
                            <div class="col-sm-12 mb-3 mb-sm-0">
                                <label>Operador que entrega:</label>
                                <input type="text" class="form-control form-control-user mb-3 mayusculas" v-model="operaEntreUnidadIngre" placeholder="Operador que entrega"/>
                            </div>
                            <div class="col-sm-12 col-lg-6">
                                <div class="mb-3 mb-sm-0">
                                    <label>Descripción de los daños:</label>
                                    <input type="text" class="form-control form-control-user mb-3 mayusculas" v-model="decripDanosRep1Ingre" placeholder="1"/>
                                </div>
                                <div class="mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user mb-3 mayusculas" v-model="decripDanosRep2Ingre" placeholder="2"/>
                                </div>
                                <div class="mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user mb-3 mayusculas" v-model="decripDanosRep3Ingre" placeholder="3"/>
                                </div>
                                <div class="mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user mb-3 mayusculas" v-model="decripDanosRep4Ingre" placeholder="4"/>
                                </div>
                                <div class="mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user mb-3 mayusculas" v-model="decripDanosRep5Ingre" placeholder="5"/>
                                </div>
                                <div class="mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user mb-3 mayusculas" v-model="decripDanosRep6Ingre" placeholder="6"/>
                                </div>
                                <div class="mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user mb-3 mayusculas" v-model="decripDanosRep7Ingre" placeholder="7"/>
                                </div>
                                <div class="mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user mb-3 mayusculas" v-model="decripDanosRep8Ingre" placeholder="8"/>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-6 mx-auto text-center">
                                <img src="../img/urban.jpg" class="img-fluid">
                            </div>                
                        </div>

                        <button class="btn btn-primary btn-lg form-control form-control-user my-5" :disabled="this.fechaIngre != '' && this.horaIngre != '' && this.ordenRepIngre != '' && this.numEcoIngre != '' && this.placasIngre != '' && this.anoIngre != '' ? this.estadoBtn = flase : this.estadoBtn = true" style="padding-bottom: 40px;">
                            <img src="../img/icons/agregar.svg"> Guardar
                        </button>
                    </form>

                    <h3 class="text-center my-5"><div  class="badge badge-primary p-3">HISTÓRICO DE ORDENES</div></h3>
                    <div class="row mb-5">
                        <div class="col-12">
                            <div style="width:100%;overflow:auto; max-height:800px;">
                                <table class="table table-hover table-striped" style="font-size: .8em; width:100%;">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th>Id</th>
                                            <th>Fecha de ingreso</th>
                                            <th>Hora</th>
                                            <th>Orden de reparación</th>
                                            <th>Gestor operativo</th>
                                            <th>Número Económico</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="orden of ordenIngre">
                                            <td>{{orden.id}}</td>
                                            <td>{{orden.fechaIngre}}</td>
                                            <td>{{orden.horaIngre}}</td>
                                            <td>{{orden.ordenRepIngre}}</td>
                                            <td>{{orden.gestorOperIngre}}</td>
                                            <td>{{orden.numEcoIngre}}</td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-secondary" @click="btnEditar(orden.id, orden.fechaIngre, orden.horaIngre, orden.ordenRepIngre, orden.gestorOperIngre, orden.numEcoIngre, orden.placasIngre, orden.tipoIngre, orden.anoIngre, orden.ramalIngre, orden.nomAccionistaIngre, orden.operaEntreUnidadIngre, orden.decripDanosRep1Ingre, orden.decripDanosRep2Ingre, orden.decripDanosRep3Ingre, orden.decripDanosRep4Ingre, orden.decripDanosRep5Ingre, orden.decripDanosRep6Ingre, orden.decripDanosRep7Ingre, orden.decripDanosRep8Ingre)"><img src="../img/icons/editar.svg"></button>
                                                    <button class="btn btn-danger" @click="btnEliminar(orden.id)"><img src="../img/icons/borrar.svg"></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="../js/vue.js"></script>
	<script src="../js/axios.min.js"></script>
	<script src="../js/sweetalert2.min.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                ordenIngre: [],
				fechaIngre: '',
				horaIngre: '',
				ordenRepIngre: '',
				gestorOperIngre: '',
				numEcoIngre: '',
                placasIngre: '',
                tipoIngre: '',
                anoIngre: '',
                ramalIngre: '',
                nomAccionistaIngre: '',
                operaEntreUnidadIngre: '',
                decripDanosRep1Ingre: '',
                decripDanosRep2Ingre: '',
                decripDanosRep3Ingre: '',
                decripDanosRep4Ingre: '',
                decripDanosRep5Ingre: '',
                decripDanosRep6Ingre: '',
                decripDanosRep7Ingre: '',
                decripDanosRep8Ingre: '',
                estadoBtn: false
            },
            methods: {

                //btnAlta
                alta () {
                    axios.post('../dOrdenIngreso/crud.app', {
                        opcion: 1,
                        fechaIngre: this.fechaIngre,
                        horaIngre: this.horaIngre,
                        ordenRepIngre: this.ordenRepIngre,
                        gestorOperIngre: this.gestorOperIngre,
                        numEcoIngre: this.numEcoIngre,
                        placasIngre: this.placasIngre,
                        tipoIngre: this.tipoIngre,
                        anoIngre: this.anoIngre,
                        ramalIngre: this.ramalIngre,
                        nomAccionistaIngre: this.nomAccionistaIngre,
                        operaEntreUnidadIngre: this.operaEntreUnidadIngre,
                        decripDanosRep1Ingre: this.decripDanosRep1Ingre,
                        decripDanosRep2Ingre: this.decripDanosRep2Ingre,
                        decripDanosRep3Ingre: this.decripDanosRep3Ingre,
                        decripDanosRep4Ingre: this.decripDanosRep4Ingre,
                        decripDanosRep5Ingre: this.decripDanosRep5Ingre,
                        decripDanosRep6Ingre: this.decripDanosRep6Ingre,
                        decripDanosRep7Ingre: this.decripDanosRep7Ingre,
                        decripDanosRep8Ingre: this.decripDanosRep8Ingre
                    })
                    .then(response => {
                        this.listaOrdenIngreso(); 
                        Swal.fire({
                                icon: 'success',
                                title: '¡Alta exitosa!',
                                showConfirmButton: false,
                                timer: 1500,
                                onClose: () => {

                                }
                        })
                    })
                    this.fechaIngre = "",
                    this.horaIngre = "",
                    this.ordenRepIngre = "",
                    this.gestorOperIngre = "",
                    this.numEcoIngre = "",
                    this.placasIngre = "",
                    this.tipoIngre = "",
                    this.anoIngre = "",
                    this.ramalIngre = "",
                    this.nomAccionistaIngre = "",
                    this.operaEntreUnidadIngre = "",
                    this.decripDanosRep1Ingre = "",
                    this.decripDanosRep2Ingre = "",
                    this.decripDanosRep3Ingre = "",
                    this.decripDanosRep4Ingre = "",
                    this.decripDanosRep5Ingre = "",
                    this.decripDanosRep6Ingre = "",
                    this.decripDanosRep7Ingre = "",
                    this.decripDanosRep8Ingre = ""
                },

                //btnEditar
                btnEditar: async function(id, fechaIngre, horaIngre, ordenRepIngre, gestorOperIngre, numEcoIngre, placasIngre, tipoIngre, anoIngre, ramalIngre, nomAccionistaIngre, operaEntreUnidadIngre, decripDanosRep1Ingre, decripDanosRep2Ingre, decripDanosRep3Ingre, decripDanosRep4Ingre, decripDanosRep5Ingre, decripDanosRep6Ingre, decripDanosRep7Ingre, decripDanosRep8Ingre){
					await Swal.fire({
			        title: 'EDITAR',
			        html:
			        '<div class="form-group"><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">Fecha deingreso:</label><div class="col-sm-7"><input id="fechaIngre" value="'+fechaIngre+'" type="date" class="form-control"></div></div><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">Hora:</label><div class="col-sm-7"><input id="horaIngre" value="'+horaIngre+'" type="time" class="form-control"></div></div><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">Ordendereparación:</label><div class="col-sm-7"><input id="ordenRepIngre" value="'+ordenRepIngre+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">Gestoroperativo:</label><div class="col-sm-7"><input id="gestorOperIngre" value="'+gestorOperIngre+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">NúmeroEconómico:</label><div class="col-sm-7"><input id="numEcoIngre" value="'+numEcoIngre+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">Placas:</label><div class="col-sm-7"><input id="placasIngre" value="'+placasIngre+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">Tipo:</label><div class="col-sm-7"><input id="tipoIngre" value="'+tipoIngre+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">Año:</label><div class="col-sm-7"><input id="anoIngre" value="'+anoIngre+'" type="number" min="1900" max="2099" step="1" value="2020" class="form-control"></div></div><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">Ramal:</label><div class="col-sm-7"><input id="ramalIngre" value="'+ramalIngre+'" type="text" class="form-control"></div></div><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">Nombre delAccionista:</label><div class="col-sm-7"><input id="nomAccionistaIngre" value="'+nomAccionistaIngre+'" type="text"class="form-control"></div></div><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">Operador queentrega:</label><div class="col-sm-7"><input id="operaEntreUnidadIngre" value="'+operaEntreUnidadIngre+'" type="text"class="form-control"></div></div><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">Descripción daños1:</label><div class="col-sm-7"><input id="decripDanosRep1Ingre" value="'+decripDanosRep1Ingre+'" type="text"class="form-control"></div></div><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">Descripción daños2:</label><div class="col-sm-7"><input id="decripDanosRep2Ingre" value="'+decripDanosRep2Ingre+'" type="text"class="form-control"></div></div><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">Descripción daños3:</label><div class="col-sm-7"><input id="decripDanosRep3Ingre" value="'+decripDanosRep3Ingre+'" type="text"class="form-control"></div></div><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">Descripción daños4:</label><div class="col-sm-7"><input id="decripDanosRep4Ingre" value="'+decripDanosRep4Ingre+'" type="text"class="form-control"></div></div><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">Descripción daños5:</label><div class="col-sm-7"><input id="decripDanosRep5Ingre" value="'+decripDanosRep5Ingre+'" type="text"class="form-control"></div></div><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">Descripción daños6:</label><div class="col-sm-7"><input id="decripDanosRep6Ingre" value="'+decripDanosRep6Ingre+'" type="text"class="form-control"></div></div><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">Descripción daños7:</label><div class="col-sm-7"><input id="decripDanosRep7Ingre" value="'+decripDanosRep7Ingre+'" type="text"class="form-control"></div></div><div class="row"><label class="col-sm-5 col-form-label text-right" style="font-size: .8em;">Descripción daños8:</label><div class="col-sm-7"><input id="decripDanosRep8Ingre" value="'+decripDanosRep8Ingre+'" type="text"class="form-control"></div></div></div>', 
                    confirmButtonText: 'Actualizar',
                    confirmButtonColor: '#FF6500',
                    focusConfirm: false,
			        showCancelButton: true,                         
			        }).then((result) => {
			          if (result.value) {                                             
			            fechaIngre = document.getElementById('fechaIngre').value,    
			            horaIngre = document.getElementById('horaIngre').value,
			            ordenRepIngre = document.getElementById('ordenRepIngre').value,
			            gestorOperIngre = document.getElementById('gestorOperIngre').value,              
			            numEcoIngre = document.getElementById('numEcoIngre').value,
			            placasIngre = document.getElementById('placasIngre').value,
			            tipoIngre = document.getElementById('tipoIngre').value,
			            anoIngre = document.getElementById('anoIngre').value,
			            ramalIngre = document.getElementById('ramalIngre').value,
			            nomAccionistaIngre = document.getElementById('nomAccionistaIngre').value,
			            operaEntreUnidadIngre = document.getElementById('operaEntreUnidadIngre').value,
			            decripDanosRep1Ingre = document.getElementById('decripDanosRep1Ingre').value,
			            decripDanosRep2Ingre = document.getElementById('decripDanosRep2Ingre').value,
			            decripDanosRep3Ingre = document.getElementById('decripDanosRep3Ingre').value,
			            decripDanosRep4Ingre = document.getElementById('decripDanosRep4Ingre').value,
			            decripDanosRep5Ingre = document.getElementById('decripDanosRep5Ingre').value,
			            decripDanosRep6Ingre = document.getElementById('decripDanosRep6Ingre').value,
			            decripDanosRep7Ingre = document.getElementById('decripDanosRep7Ingre').value,
			            decripDanosRep8Ingre = document.getElementById('decripDanosRep8Ingre').value
			            
			            this.editarRiesgo(id,fechaIngre,horaIngre,ordenRepIngre,gestorOperIngre,numEcoIngre,placasIngre,tipoIngre,anoIngre,ramalIngre,nomAccionistaIngre,operaEntreUnidadIngre,decripDanosRep1Ingre,decripDanosRep2Ingre,decripDanosRep3Ingre,decripDanosRep4Ingre,decripDanosRep5Ingre,decripDanosRep6Ingre,decripDanosRep7Ingre,decripDanosRep8Ingre);
			            Swal.fire(
			              '¡Actualizado!',
			              'El registro ha sido actualizado.',
			              'success'
			            )                  
			          }
			        });

				},

                //btnEliminar
				btnEliminar: function(id){
					Swal.fire({
			          title: '¿Está seguro de borrar el registro: '+id+" ?",         
			          type: 'warning',
			          showCancelButton: true,
			          confirmButtonColor:'#d33',
			          cancelButtonColor:'#3085d6',
			          confirmButtonText: 'Borrar'
			        }).then((result) => {
			          if (result.value) {            
			            this.borrarRiesgo(id);             
			            //y mostramos un msj sobre la eliminación  
			            Swal.fire(
			              '¡Eliminado!',
			              'El registro ha sido borrado.',
			              'success'
			            )
			          }
			        })

				},

                //Lista
                listaOrdenIngreso:function(){
			        axios.post('../dOrdenIngreso/crud.app', {opcion:4}).then(response =>{
			           this.ordenIngre = response.data;       
			        });
			    },

                //Procedimiento EDITAR.
			    editarRiesgo:function(id, fechaIngre, horaIngre, ordenRepIngre, gestorOperIngre, numEcoIngre, placasIngre, tipoIngre, anoIngre,ramalIngre, nomAccionistaIngre, operaEntreUnidadIngre, decripDanosRep1Ingre, decripDanosRep2Ingre, decripDanosRep3Ingre, decripDanosRep4Ingre, decripDanosRep5Ingre, decripDanosRep6Ingre, decripDanosRep7Ingre, decripDanosRep8Ingre){       
			       axios.post('../dOrdenIngreso/crud.app', {opcion:2, id:id, fechaIngre:fechaIngre, horaIngre:horaIngre, ordenRepIngre:ordenRepIngre, gestorOperIngre:gestorOperIngre, numEcoIngre:numEcoIngre, placasIngre:placasIngre, tipoIngre:tipoIngre, anoIngre:anoIngre, ramalIngre:ramalIngre, nomAccionistaIngre:nomAccionistaIngre, operaEntreUnidadIngre:operaEntreUnidadIngre, decripDanosRep1Ingre:decripDanosRep1Ingre, decripDanosRep2Ingre:decripDanosRep2Ingre, decripDanosRep3Ingre:decripDanosRep3Ingre, decripDanosRep4Ingre:decripDanosRep4Ingre, decripDanosRep5Ingre:decripDanosRep5Ingre, decripDanosRep6Ingre:decripDanosRep6Ingre, decripDanosRep7Ingre:decripDanosRep7Ingre, decripDanosRep8Ingre:decripDanosRep8Ingre}).then(response =>{           
			           this.listaOrdenIngreso();           
			        });                              
			    },

			    //Procedimiento BORRAR.
			    borrarRiesgo:function(id){
			        axios.post('../dOrdenIngreso/crud.app', {opcion:3, id:id}).then(response =>{           
			            this.listaOrdenIngreso();
			            });
			    }
            },

            created() {            
			   this.listaOrdenIngreso();            
			},
        })
    </script>
</body>
</html>