const { sql,poolPromise } = require('../database/db')
const fs = require('fs');
class MainControllerValidacion {

  async getTiendasFaltantes(req , res){
    try {
      const sql="SELECT"
        +" cacevedo_atenas.ss_Pais.Id_Pais,"
        +" cacevedo_atenas.ss_Estado.Id_Estado,"
        +" cacevedo_atenas.ss_Municipio.Id_Municipio, "
        +" cacevedo_atenas.ss_Parroquia.Id_Parroquia,"
        +" cacevedo_atenas.ss_Pais.Pais,"
        +" cacevedo_atenas.ss_Estado.Estado,"
        +" cacevedo_atenas.ss_Municipio.Municipio,"
        +" cacevedo_atenas.ss_Parroquia.Validaciones,"
        +" case when cacevedo_atenas.ss_Parroquia.Ind_activo=1 then 'Activo' end AS Ind_Activo"
        +" FROM"
        +" cacevedo_atenas.ss_Parroquia"
        +" INNER JOIN cacevedo_atenas.ss_Municipio ON cacevedo_atenas.ss_Parroquia.Id_Municipio = cacevedo_atenas.ss_Municipio.Id_Municipio"
        +" INNER JOIN cacevedo_atenas.ss_Estado ON cacevedo_atenas.ss_Municipio.Id_Municipio = cacevedo_atenas.ss_Estado.Id_Estado"
        +" INNER JOIN cacevedo_atenas.ss_Pais ON cacevedo_atenas.ss_Estado.Id_Pais = cacevedo_atenas.ss_Pais.Id_Pais"
        +" where cacevedo_atenas.ss_Parroquia.Ind_activo=1"
        +" and cacevedo_atenas.ss_Municipio.Id_Municipio="+req.params.IdParroquia+"";
        +" order by pais, estado,municipio,Validaciones";
      const pool = await poolPromises
        const result = await pool.request()
        .query(sql)
        res.status(200)
        res.json({data:result.recordset})
    } catch (error) {
      res.status(500)
      res.send(error.message)
    }
  }

  async getTamanoArchivo(req , res){
    try {
      if(req.params.idOpc != null && req.params.idRet != null && req.params.idSem != null) {

        const sql="SELECT Tam_Archivo, id_Semana, ss_Semana.Semana as semana FROM ArchivosProcesados"
        +" INNER JOIN ss_Semana ON ArchivosProcesados.Id_Semana = ss_Semana.IdSemana"
        +" WHERE "
        +" Id_Retail =" + req.params.idRet
        +" AND"
        +" Id_Semana IN (" + req.params.idSem +")"
        +" ORDER BY Id_Semana DESC";
        console.log(sql);
        const pool = await poolPromise
          const result = await pool.request()
          .query(sql)
          res.json({data:result.recordset})
      } else {
        res.send('Todos los Campos Son Requerido!')
      }
    } catch (error) {
      res.status(500)
      res.send(error.message)
    }
  }

  async getCantidadRegistros(req , res){
    try {
      if(req.params.idOpc != null && req.params.idRet != null && req.params.idSem != null) {

        const sql="SELECT Num_registro, id_Semana, ss_Semana.Semana as semana FROM ArchivosProcesados"
        +" INNER JOIN ss_Semana ON ArchivosProcesados.Id_Semana = ss_Semana.IdSemana"
        +" WHERE "
        +" Id_Retail =" + req.params.idRet
        +" AND"
        +" Id_Semana IN (" + req.params.idSem +")"
        +" ORDER BY Id_Semana DESC";
        //console.log(sql);
        const pool = await poolPromise
          const result = await pool.request()
          .query(sql)
          res.json({data:result.recordset})
      } else {
        res.send('Todos los Campos Son Requerido!')
      }
    } catch (error) {
      res.status(500)
      res.send(error.message)
    }
  }

  async getTiendasFaltantes(req , res){
    try {
      if(req.params.idOpc != null && req.params.idRet != null && req.params.idSem != null) {
        const sql=" SELECT a.Id_TiendaRetail as codigo, a.Tienda as tienda FROM Tiendas AS a"
        +" WHERE"
        +" NOT EXISTS ( SELECT b.ID_Semana FROM ftp_Dia b WHERE a.Id_TiendaRetail = b.ID_TIENDA AND b.ID_Semana=" +req.params.idSem +")"
	      +" AND"
        +" a.Activo = 1"
        +" ORDER BY"
        +" a.Tienda ASC";
        //console.log(sql);
        const pool = await poolPromise
          const result = await pool.request()
          .query(sql)
          res.json({data:result.recordset})
      } else {
        res.send('Todos los Campos Son Requerido!')
      }
    } catch (error) {
      res.status(500)
      res.send(error.message)
    }

  }

  async getTiendasNuevas(req , res){
    try {
      if(req.params.idOpc != null && req.params.idRet != null && req.params.idSem != null) {
        const sql=" SELECT DISTINCT ftp_Dia.ID_TIENDA  as codigo"
        +" FROM"
        +" ftp_Dia"
        +" WHERE"
        +" NOT EXISTS ("
        +" SELECT NULL FROM Tiendas WHERE tiendas.Id_TiendaRetail = ftp_Dia.ID_TIENDA )"
        +" AND"
        +" ftp_Dia.ID_Semana =" + req.params.idSem
        console.log(sql);
        const pool = await poolPromise
          const result = await pool.request()
          .query(sql)
          res.json({data:result.recordset})
      } else {
        res.send('Todos los Campos Son Requerido!')
      }
    } catch (error) {
      res.status(500)
      res.send(error.message)
    }


  }

  async getTiendasRetail(req , res){
    try {
      if(req.params.idRet != null) {
        const sql=" SELECT Tiendas.Id_TiendaRetail,"
        +" Tiendas.Tienda"
        +" FROM"
        +" Tiendas"
        +" WHERE"
        +" Tiendas.Activo = 1"
        +" ORDER BY"
        +" Tiendas.Tienda ASC";
        //console.log(sql);
        const pool = await poolPromise
          const result = await pool.request()
          .query(sql)
          res.json({data:result.recordset})
      } else {
        res.send('Todos los Campos Son Requerido!')
      }
    } catch (error) {
      res.status(500)
      res.send(error.message)
    }

  }

  async getTiendasRetail(req , res){
    try {
      if(req.params.idRet != null) {
        const sql=" SELECT Id_TiendaRetail as codigo,"
        +" Tienda as tienda, direccion"
        +" FROM"
        +" Tiendas"
        +" WHERE"
        +" Tiendas.Activo = 1"
        +" AND Tiendas.Id_Retail =" + req.params.idRet
        +" ORDER BY"
        +" Tiendas.Tienda ASC";
        //console.log(sql);
        const pool = await poolPromise
          const result = await pool.request()
          .query(sql)
          res.json({data:result.recordset})
      } else {
        res.send('Todos los Campos Son Requerido!')
      }
    } catch (error) {
      res.status(500)
      res.send(error.message)
    }

  }

  async getACVTiendasRetail(req , res){
    try {
      if(req.params.idRet != null) {
        const sql=" SELECT Tiendas.Id_TiendaRetail as codigo,"
        +" Tiendas.Tienda as tienda,"
        +" TotalVentaRetailSemanal.TotalVentaSemanal as total"
        +" FROM"
        +" TotalVentaRetailSemanal"
        +" INNER JOIN dbo.Tiendas ON Tiendas.Id_Tiendas = TotalVentaRetailSemanal.ID_Tienda"
        +" WHERE"
        +" TotalVentaRetailSemanal.ID_Semana =" + req.params.idSem
        +" AND"
        +" TotalVentaRetailSemanal.ID_Retail =" + req.params.idRet
        +" ORDER BY"
        +" TotalVentaRetailSemanal.TotalVentaSemanal DESC"
        console.log(sql);
        const pool = await poolPromise
          const result = await pool.request()
          .query(sql)
          res.json({data:result.recordset})
      } else {
        res.send('Todos los Campos Son Requerido!')
      }
    } catch (error) {
      res.status(500)
      res.send(error.message)
    }

  }




} // Fin MainControllerValidacion


const controllerValidaciones = new MainControllerValidacion()
module.exports = controllerValidaciones;