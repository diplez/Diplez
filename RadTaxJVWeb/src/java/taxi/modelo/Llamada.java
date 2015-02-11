/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package taxi.modelo;

import java.io.Serializable;
import java.sql.Timestamp;
import java.text.SimpleDateFormat;
import java.util.Date;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;
import javax.persistence.OneToOne;
import javax.persistence.Table;
import javax.persistence.Temporal;
import javax.persistence.TemporalType;

/**
 *
 * @author diego
 */

@Entity
@Table(name = "Inv_Llamada")
public class Llamada implements Serializable{
    
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private Long id;    
      
    @Temporal(TemporalType.TIMESTAMP)
    @Column(nullable = false)
    private Date fecha;
    
    @Temporal(TemporalType.DATE)    
    private Date hora;        
    
    @OneToOne    
    private Cliente cliente;

    public Llamada() {
    }

    public Llamada(Cliente cliente) {        
        this.fecha = new Date();
        this.hora = new Date();
        this.cliente = cliente;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public Date getFecha() {
        return fecha;
    }

    public void setFecha(Date fecha) {
        this.fecha = fecha;
    }

    public Date getHora() {
        return hora;
    }

    public void setHora(Timestamp hora) {
        this.hora = hora;
    }

    public Cliente getCliente() {
        return cliente;
    }

    public void setCliente(Cliente cliente) {
        this.cliente = cliente;
    }
    
    public String getFechaFormateada(){
        SimpleDateFormat format = new SimpleDateFormat("MMM dd yyyy HH:mm:ss");
        return format.format(fecha);
    }
}
