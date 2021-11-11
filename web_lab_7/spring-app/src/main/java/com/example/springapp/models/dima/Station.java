package com.example.springapp.models.dima;

import lombok.Data;
import lombok.NoArgsConstructor;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Id;

@Entity
@Data
@NoArgsConstructor
public class Station {
	@Id
	@GeneratedValue(strategy = GenerationType.AUTO)
	private Long id;

	private String arriveAt;
	private String dispatch;
	private String stop;
}
