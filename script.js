const mysql = require('mysql')

const conection =mysql.createConnection({
    host:'localhost',
    user:'Eider',
    password:'lvpW1ShDWYdUmpW/',
    database:'parqueadero' 
})

conection.connect((err) =>{
    if(err) throw err
    console.log('Conexion exitosa')
})

