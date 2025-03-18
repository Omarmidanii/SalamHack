import {
  Box,
  RangeSlider,
  RangeSliderFilledTrack,
  RangeSliderMark,
  RangeSliderThumb,
  RangeSliderTrack,
  Tooltip,
} from "@chakra-ui/react";
import { useState } from "react";

interface Props {
  name: string;
  max: number;
}
const CostRangeSlider = ({ name, max }: Props) => {
  const [sliderValue, setSliderValue] = useState([100, max]);
  const [showTooltip, setShowTooltip] = useState(false);
  return (
    <Box w={'inherit'} px={2}>
      {name}
      <RangeSlider
        aria-label={["min", "max"]}
        defaultValue={[100, 400]}
        min={0}
        max={max}
        colorScheme="blue"
        onChange={(v) => setSliderValue(v)}
        onMouseEnter={() => setShowTooltip(true)}
        onMouseLeave={() => setShowTooltip(false)}
      >
        <RangeSliderMark value={0} mt="1" ml="-2.5" fontSize="sm">
          0
        </RangeSliderMark>
        <RangeSliderMark value={1000} mt="1" ml="-2.5" fontSize="sm">
          1000
        </RangeSliderMark>
        {max >= 2000 && (
          <RangeSliderMark value={2000} mt="1" ml="-2.5" fontSize="sm">
            2000
          </RangeSliderMark>
        )}
        <RangeSliderTrack>
          <RangeSliderFilledTrack />
        </RangeSliderTrack>
        <Tooltip
          borderRadius={15}
          color="white"
          placement="top"
          isOpen={showTooltip}
          label={`${sliderValue[0]}%`}
        >
          <RangeSliderThumb index={0} />
        </Tooltip>
        <Tooltip
          borderRadius={15}
          color="white"
          placement="top"
          isOpen={showTooltip}
          label={`${sliderValue[1]}%`}
        >
          <RangeSliderThumb index={1} />
        </Tooltip>
      </RangeSlider>
    </Box>
  );
};

export default CostRangeSlider;
