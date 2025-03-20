import { Box, HStack, SimpleGrid, Stack, Text } from "@chakra-ui/react";
import PlaceCard from "../Landing/PlaceCard";
import PlacesFilter from "./PlacesFilter";
import landingShow3 from "../../assets/Landing/landingShow3.jpeg";
import useFetchHotels from "../../hooks/useFetchHotels";
import InfiniteScroll from "react-infinite-scroll-component";
import useFetchRetaurants from "../../hooks/useFetchRetaurants";
import useFetchEntPlaces from "../../hooks/useFetchEntPlaces";
import React from "react";

const PlacesGrid = () => {
  const currentPathname = window.location.pathname;
  const { data, fetchNextPage, hasNextPage } =
    currentPathname.substring(8) == "hotels"
      ? useFetchHotels()
      : currentPathname.substring(8) == "restaurants"
      ? useFetchRetaurants()
      : useFetchEntPlaces();

  const fetchedCount =
    data?.pages.reduce((total, page) => total + page.data.length, 0) || 0;

  return (
    <Box mt={80}>
      <HStack mx={10} mb={8} justifyContent={"space-between"}>
        <Text fontSize={32} fontWeight={"bold"} textColor={"#EAB875"}>
          {" "}
          Choose your destination:{" "}
        </Text>

        <PlacesFilter />
      </HStack>

      <InfiniteScroll
        dataLength={fetchedCount}
        hasMore={hasNextPage}
        next={() => fetchNextPage()}
        loader={
          <Stack placeItems={"center"} my={20} mt={-5}>
            hi
            {/*<ReactPlayer
              url={loading}
              playing
              loop
              controls={false}
              width="88px"
              height="88px"
              muted
            /> */}
          </Stack>
        }
        endMessage={
          <p
            style={{
              textAlign: "center",
              marginBottom:
                currentPathname.substring(0, 11) == "/dash/custo" ? 30 : 70,
              marginTop: 0,
            }}
          >
            <b> No more {currentPathname.substring(8)}! :)</b>
          </p>
        }
        scrollableTarget="k"
      >
        <SimpleGrid
          columns={4} //{{  sm: 1, base: 1, md: 2, lg: 3, xl: 4 }}
          spacing={10}
          padding={10}
        >
          {data?.pages.map((page, ind) => (
            <React.Fragment key={ind}>
              {page.data.map((info, index) => (
                <Box
                  key={index}
                  cursor="pointer"
                  _hover={{
                    transform: "scale(1.05)",
                    transition: "transform 0.3s ease",
                  }}
                >
                  <PlaceCard
                    type={currentPathname.substring(8)}
                    id={info.id}
                    name={info.name}
                    location={info.address}
                    image={
                      info.images.length > 0 ? info.images[0].url : landingShow3
                    }
                  />
                </Box>
              ))}
            </React.Fragment>
          ))}
        </SimpleGrid>
      </InfiniteScroll>
    </Box>
  );
};

export default PlacesGrid;
