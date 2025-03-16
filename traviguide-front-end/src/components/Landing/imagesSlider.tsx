import { Box } from "@chakra-ui/react";
import landingShow from "../../assets/landingShow.png";

const ImagesSlider = () => {
  return (
    <div>
      <Box
        boxSize={600}
        w={"inherit"}
        borderRadius={36}
        mt={5}
        bgImage={landingShow}
        bgRepeat={"no-repeat"}
        bgSize={"cover"}
      />
    </div>
  );
};

export default ImagesSlider;
