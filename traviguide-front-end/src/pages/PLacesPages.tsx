import ImagesSlider from "../components/Landing/imagesSlider";
import landingShow from "../assets/Landing/landingShow.png";
import landingShow2 from "../assets/Landing/landingShow2.jpeg";
import landingShow1 from "../assets/Landing/landingShow1.jpeg";
import landingShow3 from "../assets/Landing/landingShow3.jpeg";
import { Box } from "@chakra-ui/react";
import PlacesGrid from "../components/PLaces/placesGrid";

const PLacesPages = () => {
  return (
    <Box mx={10}>
      <ImagesSlider
        images={[landingShow1, landingShow3, landingShow2, landingShow1]}
      />
      <PlacesGrid
        data={[
          landingShow,
          landingShow3,
          landingShow2,
          landingShow1,
          landingShow2,
          landingShow,
          landingShow2,
          landingShow3,
          landingShow3,
          landingShow1,
        ]}
      />
    </Box>
  );
};

export default PLacesPages;
