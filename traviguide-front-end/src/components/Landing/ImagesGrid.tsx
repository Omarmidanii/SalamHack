import { Grid, GridItem, Image } from "@chakra-ui/react";
import d1 from "../../assets/Landing/discover1.jpeg";
import d2 from "../../assets/Landing/discover2.jpeg";
import d3 from "../../assets/Landing/discover3.jpeg";

const ImagesGrid = () => {
  return (
    <Grid
      templateAreas={`
                "none up"
                "side up"
                "side down"
                "none2 down"
              `}
    >
      <GridItem p={5} area={"side"}>
        <Image src={d2} h={400} borderRadius={30} />
      </GridItem>
      <GridItem p={5} pl={8} area={"up"}>
        <Image src={d3} h={300} borderRadius={30} />
      </GridItem>
      <GridItem p={5} area={"down"} pl={3}>
        <Image src={d1} h={200} borderRadius={30} />
      </GridItem>

      <GridItem bgColor={"white"} area={"none"}h={14} />
      <GridItem bgColor={"white"} area={"none2"} />
    </Grid>
  );
};

export default ImagesGrid;
