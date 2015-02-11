/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package taxi.ManagedBeans;

import java.io.Serializable;
import javax.faces.application.FacesMessage;
import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;
import javax.faces.context.ExternalContext;
import javax.faces.context.FacesContext;
import javax.servlet.http.HttpSession;
import taxi.dao.Dao;
import taxi.modelo.Administrador;
import taxi.modelo.Empleado;

/**
 *
 * @author diego
 */
@ManagedBean(name = "loginController")
@SessionScoped
public class LoginBean implements Serializable {

    /**
     * Creates a new instance of LoginBean
     */
    private static final long serialVersionUID = 1L;
    private String nombre;
    private String clave;
    private int TipoUsuario;
    private Dao dao;
    private Empleado empleado;
    private Administrador administrador;

    public LoginBean() {
        dao = new Dao();        
    }

    public String loguearUsuario() {
        if (dao.autenticarEmpleado(nombre, clave) != null) {            
            if (TipoUsuario == 0) { // 0 valor para logueo de Empleado            
                empleado = new Empleado(nombre, clave);
                return "principal.xhtml?faces-redirect=true";
            } else { // 1 Valor asignado para logueo de Administrador            
                administrador = new Administrador(nombre, clave);
                return "principal.xhtml?faces-redirect=true";
            }
        } else {
            FacesMessage fm = new FacesMessage("Usuario no encontrado!!!");
            FacesContext.getCurrentInstance().addMessage(null, fm);
            return "";
        }
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getClave() {
        return clave;
    }

    public void setClave(String clave) {
        this.clave = clave;
    }

    public int getTipoUsuario() {
        return TipoUsuario;
    }

    public void setTipoUsuario(int TipoUsuario) {
        this.TipoUsuario = TipoUsuario;
    }

    public Dao getDao() {
        return dao;
    }

    public void setDao(Dao dao) {
        this.dao = dao;
    }

    public String cerrarSession(){
        administrador = null;
        empleado = null;
        FacesContext context = FacesContext.getCurrentInstance();
        ExternalContext externalContext = context.getExternalContext();
        Object session = externalContext.getSession(false);
        HttpSession hs = (HttpSession)session;        
        if(hs != null){
            hs.invalidate();
            return "/index?faces-redirect=true";
        }else{
            return null;
        }
    }
}
