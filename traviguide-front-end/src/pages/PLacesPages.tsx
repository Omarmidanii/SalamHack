import ImagesSlider from "../components/Landing/imagesSlider";
import landingShow2 from "../assets/Landing/landingShow2.jpeg";
import landingShow1 from "../assets/Landing/landingShow1.jpeg";
import landingShow3 from "../assets/Landing/landingShow3.jpeg";
import { Box } from "@chakra-ui/react";
import { Outlet } from "react-router-dom";

const PLacesPages = () => {
  return (
    <Box mx={10}>
      <ImagesSlider
        images={[landingShow1, landingShow3, landingShow2, landingShow1]}
      />
      <Outlet/>
    </Box>
  );
};

export default PLacesPages;
