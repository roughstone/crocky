import React/* , { useEffect } */ from "react";
import { NavLink/* , useRouteMatch */ } from "react-router-dom";

export const Nav = () => {
   /*  const match = useRouteMatch(); */
/*     useEffect(() => {
        $("#mainNav .nav-item").on("click", e => {
            $(".nav-item.active").removeClass("active");
            $(e.target).addClass("active");
        });

        $("#mainNav .nav-link").each((key, val) => {
            if (
                $(val)
                    .attr("href")
                    .indexOf(window.location.pathname) != -1
            ) {
                $(val)
                    .parent()
                    .addClass("active");
            }
        });
    }, []);

    const logout = () => {
        axios.post("/logout")
            .then(response => {
                window.location.href = window.location.origin;
            })
            .catch(error => {
                // handle error
            })
            .then(() => {
                // always execute
            });
    }; */

    return (
        <nav className="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <NavLink activeClassName="active" className="nav-link" to="/">
                        Сделки
                    </NavLink>
                </li>
                <li class="nav-item">
                    <NavLink className="nav-link" to="/feature">
                        Баланс
                    </NavLink>
                </li>
                <li class="nav-item">
                    <NavLink className="nav-link" to="/screenshots">
                        Плащания
                    </NavLink>
                </li>
                <li class="nav-item">
                    <NavLink className="nav-link" to="/pricing">
                        Справки
                    </NavLink>
                </li>
                <li class="nav-item">
                    <NavLink className="nav-link" to="/team">
                        Стоки
                    </NavLink>
                </li>
                <li class="nav-item">
                    <NavLink className="nav-link" to="/blog">
                        Фирми
                    </NavLink>
                </li>
                <li class="nav-item">
                    <NavLink className="nav-link" to="/contact-us">
                        Склад
                    </NavLink>
                </li>
                <li class="nav-item">
                    <NavLink className="nav-link" to="/logout">
                        Изход
                    </NavLink>
                </li>
            </ul>
        </nav>
    );
};

export default Nav;
