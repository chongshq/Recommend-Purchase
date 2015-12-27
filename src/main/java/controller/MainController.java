package controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;


/**
 * Created by жиЪщ on 12/27/15.
 */
@Controller
@RequestMapping("/")
public class MainController {


    @RequestMapping("")
    public String index() {
        return "HomePage";
    }


}
