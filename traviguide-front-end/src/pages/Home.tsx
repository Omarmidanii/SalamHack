import { Outlet } from "react-router-dom";
import NavBar from "../components/Layout/NavBar";

const Home = () => {
  return (
    <>
      <NavBar /> <Outlet/>
    </>
  );
};

export default Home;
