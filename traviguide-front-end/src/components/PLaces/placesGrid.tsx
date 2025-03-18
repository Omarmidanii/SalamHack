import { Box, HStack, SimpleGrid, Text } from "@chakra-ui/react";
import resizeWindow from "../../services/resizeWindow";
import PlaceCard from "../Landing/PlaceCard";
import PlacesFilter from "./PlacesFilter";

interface Props {
  data: string[];
}
const PlacesGrid = ({ data }: Props) => {
  const {} = resizeWindow();
  return (
    <Box mt={80}>
      <HStack mx={10} mb={8} justifyContent={"space-between"}>
        <Text fontSize={32} fontWeight={"bold"} textColor={"#EAB875"}>
          {" "}
          Choose your destination:{" "}
        </Text>

        <PlacesFilter />
      </HStack>
      <SimpleGrid
        columns={4} //{{  sm: 1, base: 1, md: 2, lg: 3, xl: 4 }}
        spacing={10}
        padding={10}
      >
        {data.map((info, index) => (
          <Box
            key={index}
            cursor="pointer"
            _hover={{
              transform: "scale(1.05)",
              transition: "transform 0.3s ease",
            }}
          >
            <PlaceCard image={info} />
          </Box>
        ))}
      </SimpleGrid>
    </Box>
  );
};

export default PlacesGrid;
