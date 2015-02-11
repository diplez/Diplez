/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package taxi.ManagedBeans;

import javax.faces.bean.ManagedBean;
import javax.faces.bean.SessionScoped;

/**
 *
 * @author diego
 */
@ManagedBean(name = "sesionUrl")
@SessionScoped
public class beanSessionUrl {

    /**
     * Creates a new instance of beanSessionUrl
     */
    private String url;
    
    public beanSessionUrl() {
        url = new String("http://localhost:8084/RadTaxJVWeb/faces/");
    }

    public String getUrl() {
        return url;
    }

    public void setUrl(String url) {
        this.url = url;
    }            
}
